<?php

namespace App\Http\Controllers;

use App\Models\Respondent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use RuntimeException;

class ExperimentController extends Controller
{
    private const TREATMENTS = ['A1', 'A2', 'B1', 'B2'];
    private const MAX_RESPONDENTS = 3;

    //Halaman utama website.
    public function show(Request $request)
    {
        return redirect()->route('experiment.instructions');
    }

    //Menampilkan instruksi 
    public function instructions(Request $request)
    {
        // Periksa apakah responden sudah memiliki treatment.
        $respondent = $this->currentRespondent($request);

        // Jika belum, lakukan alokasi otomatis.
        if (!$respondent) {
            $respondent = $this->allocateRespondent();

            // Jika seluruh kuota sudah penuh.
            if (!$respondent) {
                return response()->view(
                    'experiment.kuota-penuh',
                    [
                        'message' => 'Mohon maaf, seluruh kuota eksperimen telah terpenuhi. Saat ini kami belum dapat menerima responden baru.',
                    ],
                    403
                );
            }

            // Simpan identitas responden ke session.
            $request->session()->regenerate();

            $request->session()->put([
                'respondent_id' => $respondent->id,
                'experiment_entered' => false,
                'experiment_completed' => false,
            ]);
        }

        // Ambil kode treatment yang sudah dialokasikan.
        $treatment = $respondent->treatment;

        return response()
            ->view('experiment.instruksi', [
                'respondent' => $respondent,
                'treatment' => $treatment,
            ])
            ->header(
                'Cache-Control',
                'no-store, no-cache, must-revalidate, max-age=0'
            )
            ->header('Pragma', 'no-cache');
    }

    /**
     * Mengalokasikan treatment secara otomatis.
     * Maksimal 35 responden untuk setiap treatment.
     */
    private function allocateRespondent(): ?Respondent
    {
        return DB::transaction(function () {

            // Kunci proses alokasi agar tidak terjadi perebutan kuota.
            $lock = DB::table('treatment_allocation_locks')
                ->where('lock_name', 'treatment_allocation')
                ->lockForUpdate()
                ->first();

            if (!$lock) {
                throw new RuntimeException(
                    'Baris pengunci treatment tidak ditemukan. '
                    . 'Periksa migration treatment_allocation_locks.'
                );
            }

            // Hitung jumlah responden setiap treatment.
            $counts = Respondent::query()
                ->select('treatment', DB::raw('COUNT(*) AS aggregate'))
                ->groupBy('treatment')
                ->pluck('aggregate', 'treatment')
                ->all();

            foreach (self::TREATMENTS as $treatment) {
                $counts[$treatment] = (int) ($counts[$treatment] ?? 0);
            }

            // Cari treatment yang kuotanya belum penuh.
            $available = array_filter(
                self::TREATMENTS,
                fn ($treatment) =>
                    $counts[$treatment] < self::MAX_RESPONDENTS
            );

            // Jika seluruh treatment penuh.
            if (empty($available)) {
                return null;
            }

            // Cari treatment dengan jumlah responden paling sedikit.
            $minimum = min(
                array_map(
                    fn ($treatment) => $counts[$treatment],
                    $available
                )
            );

            // Jika jumlah sama, pilih salah satu secara acak.
            $candidates = array_values(array_filter(
                $available,
                fn ($treatment) => $counts[$treatment] === $minimum
            ));

            $selectedTreatment = $candidates[array_rand($candidates)];

            // Buat nomor responden berikutnya.
            $lastNumber = (int) Respondent::query()
                ->whereRaw("respondent_code REGEXP '^R[0-9]+$'")
                ->selectRaw("
                    COALESCE(
                        MAX(
                            CAST(
                                SUBSTRING(respondent_code, 2)
                                AS UNSIGNED
                            )
                        ),
                        0
                    ) AS max_number
                ")
                ->value('max_number');

            // Simpan responden ke database.
            return Respondent::create([
                'respondent_code' => 'R' . str_pad(
                    (string) ($lastNumber + 1),
                    3,
                    '0',
                    STR_PAD_LEFT
                ),
                'treatment' => $selectedTreatment,
                'session_token' => Str::random(40),
                'started_at' => now(),
            ]);

        }, attempts: 3);
    }

    /**
     * Membuka prototype sesuai treatment yang telah dialokasikan.
     */
    public function assign(Request $request)
    {
        $respondent = $this->currentRespondent($request);

        // Jika session belum memiliki responden,
        // arahkan kembali ke instruksi untuk alokasi.
        if (!$respondent) {
            return redirect()->route('experiment.instructions');
        }

        $treatment = strtoupper($respondent->treatment);

        abort_unless(
            in_array($treatment, self::TREATMENTS, true),
            404
        );

        $request->session()->put('experiment_entered', true);

        return response()
            ->view('treatment.' . $treatment)
            ->header(
                'Cache-Control',
                'no-store, no-cache, must-revalidate, max-age=0'
            )
            ->header('Pragma', 'no-cache');
    }

    /**
     * Mengambil responden berdasarkan session.
     */
    private function currentRespondent(Request $request): ?Respondent
    {
        $id = $request->session()->get('respondent_id');

        if (!$id) {
            return null;
        }

        $respondent = Respondent::find($id);

        if (!$respondent) {
            $request->session()->forget([
                'respondent_id',
                'experiment_entered',
                'experiment_completed',
            ]);
        }

        return $respondent;
    }

    /**
     * Menampilkan status kuota setiap treatment.
     */
    public function allocationStatus()
    {
        $counts = Respondent::query()
            ->select('treatment', DB::raw('COUNT(*) AS total'))
            ->groupBy('treatment')
            ->pluck('total', 'treatment')
            ->all();

        $result = [];

        foreach (self::TREATMENTS as $treatment) {
            $total = (int) ($counts[$treatment] ?? 0);

            $result[$treatment] = [
                'total' => $total,
                'maximum' => self::MAX_RESPONDENTS,
                'remaining' => max(
                    0,
                    self::MAX_RESPONDENTS - $total
                ),
                'full' => $total >= self::MAX_RESPONDENTS,
            ];
        }

        return response()->json([
            'treatments' => $result,
            'total_respondents' => array_sum(
                array_column($result, 'total')
            ),
            'maximum_respondents' =>
                count(self::TREATMENTS) * self::MAX_RESPONDENTS,
        ]);
    }
}