<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class specReview extends Model
{
    use HasFactory;

    protected $table = "patient_review_records_t";

    protected $fillable = [
        'cpUserID',
        'csUserID',
        'cRating',
        'cComment',
    ];
}
