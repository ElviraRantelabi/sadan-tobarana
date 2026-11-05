
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">

    <title>Instruksi Eksperimen | Sa’dan To’barana</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="instruction-page">
        <main class="instruction-container">

            <h1 class="instruction-title">
                Instruksi Eksperimen
            </h1>

            <p class="instruction-description">
                Selamat datang dalam eksperimen Smart Tourism Sa’dan To’barana.
            </p>

            <p class="instruction-description">
                Silakan jelajahi prototype yang tersedia pada sesi Anda.
                Perhatikan informasi dan fitur yang dapat digunakan.
                Setelah selesai, lanjutkan ke kuesioner penelitian.
            </p>

            {{-- INFORMASI TREATMENT --}}
            <div class="instruction-steps">

                <div class="instruction-step-card">
                    <div class="instruction-step-number">01</div>

                    <h3>Persetujuan Memulai Eksperimen</h3>

                    <p>
                        Anda akan memulai eksperimen dengan menyetujui pernyataan melalui checkbox, 
                        kemudian menekan tombol “Mulai Eksperimen” untuk melanjutkan ke tahap berikutnya.
                    </p>
                </div>

                <div class="instruction-step-card">
                    <div class="instruction-step-number">02</div>

                    <h3>Eksplorasi Semua Halaman</h3>

                    <p>
                        Jelajahi halaman dan fitur yang tersedia sesuai
                        dengan treatment Anda. Perhatikan informasi
                        yang ditampilkan.
                    </p>
                </div>

                <div class="instruction-step-card">
                    <div class="instruction-step-number">03</div>

                    <h3>Isi Kuesioner</h3>

                    <p>
                        Setelah selesai mengeksplorasi prototype,
                        isi kuesioner melalui Google Form yang disediakan.
                    </p>
                </div>

            </div>

            <div class="instruction-respondent">
                <p>
                    Partisipasi bersifat sukarela. Tidak ada jawaban benar
                    atau salah. Silakan memberikan penilaian berdasarkan
                    pengalaman Anda sendiri saat menggunakan prototype.
                </p>
            </div>

            {{-- TOMBOL MULAI --}}
            <form action="{{ route('experiment.assign') }}" method="POST">
                @csrf
                <label>
                    <input type="checkbox" id="agreement" required>
                    Saya telah membaca dan menyetujui pernyataan di atas serta bersedia mengikuti eksperimen.
                </label>
                <button type="submit" class="instruction-start-button">
                    Mulai Eksperimen
                </button>
            </form>

        </main>
    </div>
</body>
</html>
