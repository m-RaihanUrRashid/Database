<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientSpec extends Model
{
    use HasFactory;

    protected $table = "patient_review_t";

    protected $fillable = [
        'cpUserID',
        'csUserID',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function specs()
    {
        return $this->belongsTo(Specialist::class);
    }
}
