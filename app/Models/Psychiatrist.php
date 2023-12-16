<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psychiatrist extends Model
{
    use HasFactory;

    protected $table = "psychiatrist_t";
    public $timestamps = false;
    protected $fillable = [
        'cpsUserID',
        'cRehabID'
    ];

    public function prescription()
    {
        return $this->hasMany(Prescription::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }


}
