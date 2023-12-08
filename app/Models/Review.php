<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
    use HasFactory;

    protected $table = "patient_review_records_t";
    public $timestamps = false;


    protected $fillable = [
        'cpUserID',
        'csUserID',
        'nRating',
        'cComment',
    ];

    public function PatientSpec()
    {
        return $this->belongsTo(PatientSpec::class);
    }   

}
