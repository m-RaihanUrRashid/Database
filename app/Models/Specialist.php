<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\String_;

class Specialist extends Model
{
    use HasFactory;
    protected $primaryKey = "csUserID";

    protected $table = "specialist_t";
    
    public $timestamps = False;


    protected $fillable = [
        'csUserID',
        'cExperience',
        'cOff_Address',
        'cType',
        'cArea',
    ];

    public function specsPat()
    {
        return $this->hasMany(PatientSpec::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class, 'csUserID', 'cUserID');
    }
    public function therapist()
    {
        return $this->hasMany(Therapist::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

}
