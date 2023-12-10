<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrescriptionMedicine extends Model
{
    protected $primaryKey = ['cPrescID','cMedicine'];
    public $incrementing = false;
    use HasFactory;
    protected $table = "prescription_med_t";
    public $timestamps = False;
    protected $fillable = [
        'cPrescID',
        'cMedicine'
        
    ];


    public function prescription()
    {
        return $this->belongsTo(Prescription::class);
    }
}
