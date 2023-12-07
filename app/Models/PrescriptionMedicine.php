<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionMedicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'cPrescID',
        'cMedicine'
        
    ];


    public function prescription()
    {
        return $this->belongsTo(Prescription::class);
    }
}
