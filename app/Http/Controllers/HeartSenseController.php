<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeartSenseController extends Controller
{
    public function index()
    {
        // tampilkan form input user
        return view('form');
    }

    public function predict(Request $request)
    {
        // validasi input
        $validated = $request->validate([
            'age' => 'required|numeric',
            'sex' => 'required',
            'cholesterol' => 'required|numeric',
            'blood_pressure' => 'required|numeric',
            'max_heart_rate' => 'required|numeric',
        ]);

        // (contoh sederhana)
        // logika prediksi dummy — nanti bisa diganti dengan model ML atau API Colab
        $risk = 'rendah';
        if ($request->blood_pressure > 140 || $request->cholesterol > 240) {
            $risk = 'tinggi';
        }

        return view('result', [
            'data' => $validated,
            'risk' => $risk
        ]);
    }
}
