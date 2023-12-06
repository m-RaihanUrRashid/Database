<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'pUserID',
        'sUserID',
        'Rating',
        'Comment',
    ];
}
