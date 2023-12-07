<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = "person_t";

    protected $fillable = [
        'cUserID',
        'cFname',
        'cLname',
        'dDOB',
        'cAddress',
        'cEmail',
        'cType',
    ];

    public function specs()
    {
        return $this->hasMany(Specialist::class);
    }
}
