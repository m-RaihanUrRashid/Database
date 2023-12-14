<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmaContact extends Model
{

    use HasFactory;

    protected $table = "pharmacy_contact_t";
    public $timestamps = False;
    protected $primaryKey = ['cPharmaID', 'cContact'];
    protected $fillable = [
        'cPharmaID',
        'cContact'
    ];

    public function PharmaContact()
    {
        return $this->belongsTo(Ngo::class);
    }
}
