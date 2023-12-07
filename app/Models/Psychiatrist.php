<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psychiatrist extends Model
{
    use HasFactory;

    protected $table = "psychiatrist_t";


    public function prescription()
    {
        return $this->hasMany(Prescription::class);
    }
}
