<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $primaryKey = ['ctsUserID', 'cpUserID'];
    public $timestamps = false;
    public $incrementing = false;
    protected $table = "therapist_notes_t";

    protected $fillable = [

        'ctsUserID',
        'cpUserID',
        'cNotes',
        'dDate',

    ];

    public function therapist()
        {
            return $this->belongsTo(Therapist::class);
        }

}

