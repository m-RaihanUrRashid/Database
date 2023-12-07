<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = "patient_t";

    protected $fillable = [
        'cpUserID',
        'cMedical_History',
    ];

    public function patientSpecs()
    {
        return $this->hasMany(PatientSpec::class);
    }
}
