<?php

namespace App\Http\Controllers;

use App\Models\Respondent;
use Illuminate\Http\Request;

class TourismController extends Controller
{
    public function home(Request $request)
    {
        $respondentId = $request->session()->get('respondent_id');
        if (!$respondentId) {
            return redirect()->route('treatment');
        }

        $respondent = Respondent::find($respondentId);
        if (!$respondent) {
            $request->session()->forget([
                'respondent_id', 'experiment_entered', 'visited_pages', 'experiment_completed',
            ]);
            return redirect()->route('treatment');
        }

        if ((bool) $request->session()->get('experiment_completed', false) || !is_null($respondent->completed_at)) {
            $request->session()->put('experiment_completed', true);
            return redirect()->away('https://docs.google.com/forms/d/e/1FAIpQLSc3mDVWULnlTDPkMi3VGDdUHZORysisXARpQZLEYpxNROz0Jw/viewform?usp=header');
        }

        if (!(bool) $request->session()->get('experiment_entered', false)) {
            return redirect()->route('experiment.instructions');
        }

        $treatmentViews = [
            'A1' => 'treatment.A1',
            'A2' => 'treatment.A2',
            'B1' => 'treatment.B1',
            'B2' => 'treatment.B2',
        ];
        $view = $treatmentViews[$respondent->treatment] ?? null;
        if (!$view) {
            abort(500, 'Treatment responden tidak valid.');
        }

        return response()
            ->view($view, compact('respondent'))
            ->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
    }
}
