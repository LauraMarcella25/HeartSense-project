<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    protected $fillable = [
        'age','gender','blood_pressure_systolic','blood_pressure_diastolic',
        'cholesterol','smoking_status','raw_payload'
    ];

    protected $casts = [
        'raw_payload' => 'array',
    ];
}
