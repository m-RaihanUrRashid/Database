<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NGO extends Model
{

    use HasFactory;

    protected $table = "ngo_t";
    public $timestamps = False;
    protected $primaryKey = 'cNGO_ID';
    protected $fillable = [
        'cNGO_ID',
        'cOwner',
        'cArea',
        'cAddress',
        'cManagerEmail'
    ];

    public function ngocontact()
    {
        return $this->hasMany(ngocontact::class);
    }
    public function Rehab()
    {
        return $this->hasMany(Rehab::class);
    }
    public function ngohotline()
    {
        return $this->hasMany(ngohotline::class);
    }
}
