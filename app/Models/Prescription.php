<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    
        use HasFactory;
    
        protected $fillable = [
            'cPrescID',
            'dIssueDate',
            'cpUserID',
            'cpsUserID'
        ];
    
    
        public function patient()
        {
            return $this->belongsTo(Patient::class);
        }
    
        public function psychiatrist()
        {
            return $this->belongsTo(Psychiatrist::class);
        }
    
        public function prescriptionMedicines()
        {
            return $this->hasMany(PrescriptionMedicine::class);
        }

        protected static function boot()
        {
            parent::boot();
    
            static::creating(function ($prescription) {
                $prescription->dIssueDate = now();
            });
        }
    
}
