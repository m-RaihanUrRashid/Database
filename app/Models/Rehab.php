<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehab extends Model
{
    use HasFactory;

    protected $table = "rehab_centre_t";

    public $timestamps = false;


    protected $fillable = [
        'cRehabID',
        'Rehabname',
        'cStreet',
        'cRoad',
        'cCity',
        'cSupervisor',
        'cNGO_ID',
    ];

    public function specs()
    {
        return $this->belongsTo(Specialist::class);
    }
}
