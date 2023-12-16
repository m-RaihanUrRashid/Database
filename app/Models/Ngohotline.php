<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NgoHotline  extends Model
{

    use HasFactory;

    protected $table = "ngo_hotline_t";
    public $timestamps = False;
    protected $primaryKey = 'cNGO_ID';
    protected $fillable = [
        'cNGO_ID',
        'cSP_Hotline'
    ];

    public function ngocontact()
    {
        return $this->belongsTo(Ngo::class);
    }
}
