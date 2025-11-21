<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PredictionController extends Controller
{
    public function showForm()
    {
        return view('predict.form');
    }

    public function predict(Request $request)
    {
        $validated = $request->validate([
            'age' => ['required', 'integer', 'min:1', 'max:120'],
            'sex' => ['required', 'in:0,1'],
            'cp' => ['required', 'integer', 'min:0', 'max:3'],
            'trestbps' => ['required', 'integer', 'min:60', 'max:260'],
            'chol' => ['required', 'integer', 'min:50', 'max:700'],
            'fbs' => ['required', 'in:0,1'],
            'restecg' => ['required', 'integer', 'min:0', 'max:2'],
            'thalach' => ['required', 'integer', 'min:50', 'max:260'],
            'exang' => ['required', 'in:0,1'],
            'oldpeak' => ['required', 'numeric', 'min:0', 'max:10'],
            'slp' => ['required', 'integer', 'min:0', 'max:2'],
            'caa' => ['required', 'integer', 'min:0', 'max:4'],
            'thall' => ['required', 'integer', 'min:0', 'max:3'],
        ]);

        $payload = [
            'age' => (int) $validated['age'],
            'sex' => (int) $validated['sex'],
            'cp' => (int) $validated['cp'],
            'trestbps' => (int) $validated['trestbps'],
            'chol' => (int) $validated['chol'],
            'fbs' => (int) $validated['fbs'],
            'restecg' => (int) $validated['restecg'],
            'thalach' => (int) $validated['thalach'],
            'exang' => (int) $validated['exang'],
            'oldpeak' => (float) $validated['oldpeak'],
            'slp' => (int) $validated['slp'],
            'caa' => (int) $validated['caa'],
            'thall' => (int) $validated['thall'],
        ];

        $apiUrl = config('services.predictor.url');
        $prediction = null;

        if (! empty($apiUrl)) {
            try {
                $response = Http::withoutVerifying()
                    ->timeout(15)
                    ->post($apiUrl, $payload);

                if ($response->successful()) {
                    $prediction = $response->json()['prediction'] ?? null;
                }
            } catch (\Throwable $e) {
                report($e);
            }
        }

        if (is_null($prediction)) {
            $prediction = $this->fallbackPrediction($payload);
        }

        return view('predict.form', [
            'result' => $prediction,
            'input_data' => $validated,
        ])->with('success', $apiUrl ? 'Prediksi berhasil dihitung.' : 'Prediksi dihitung dengan fallback lokal.');
    }

    private function fallbackPrediction(array $payload): string
    {
        $score = 0;
        $score += $payload['age'] > 55 ? 1 : 0;
        $score += $payload['trestbps'] > 140 ? 1 : 0;
        $score += $payload['chol'] > 240 ? 1 : 0;
        $score += $payload['thalach'] < 120 ? 1 : 0;
        $score += $payload['exang'] === 1 ? 1 : 0;
        $score += $payload['oldpeak'] >= 2 ? 1 : 0;

        return $score >= 3 ? 'high' : 'low';
    }
}
