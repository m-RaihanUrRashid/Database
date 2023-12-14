<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = "person_t";
    protected $primaryKey = 'cUserID';
    public $timestamps = false;


    protected $fillable = [
        'cUserID',
        'cFname',
        'cLname',
        'dDOB',
        'cGender',
        'cAddress',
        'cEmail',
        'cType',
    ];

    public function specialist()
    {
        return $this->hasMany(Specialist::class);
    }
}
