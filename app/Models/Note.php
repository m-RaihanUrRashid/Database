<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = "therapist_notes_t";

    protected $fillable = [

        'ctsUserID',
        'cpUserID',
        'cNotes'

    ];

    public function therapist()
        {
            return $this->belongsTo(Therapist::class);
        }

}

