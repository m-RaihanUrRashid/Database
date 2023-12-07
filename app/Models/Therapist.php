<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Therapist extends Model
{

    protected $table = "therapist_t";

    public $timestamps = false;

    protected $fillable = [
        'ctsUserID',
        'cSpecialty',
    ];

    use HasFactory;
    public function specialist()
        {
            return $this->belongsTo(Specialist::class);
        }

    public function note()
        {
            return $this->hasMany(Note::class);
        }
}
