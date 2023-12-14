<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharma extends Model
{

    use HasFactory;

    protected $table = "pharmacy_t";
    public $timestamps = False;
    protected $primaryKey = 'cPharmaID';
    protected $fillable = [
        'cPharmaID',
        'cPharmaName',
        'cArea',
        'cAddress',
        'cManagerEmail'
    ];

    public function PharmaContact()
    {
        return $this->hasMany(PharmaContact::class);
    }
    
}
