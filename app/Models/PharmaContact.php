<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmaContact extends Model
{
    
    use HasFactory;
    
    protected $table = "pharmacy_contact_t";
    protected $primaryKey = ['cPharmaID', 'cContact'];
    public $incrementing = False;
    public $timestamps = False;
    protected $fillable = [
        'cPharmaID',
        'cContact'
    ];

    public function PharmaContact()
    {
        return $this->belongsTo(Pharma::class);
    }
}
