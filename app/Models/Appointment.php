<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    protected $primaryKey = ['cpUserID', 'csUserID', 'dappDate', 'cappTime'];
    use HasFactory;
    protected $table = "appointment_t";
    public $timestamps = False;
    public $incrementing = false;
    protected $fillable = [
        'cpUserID',
        'csUserID',
        'dappDate',
        'cappTime',
        'cappStatus'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function psychitrist()
    {
        return $this->belongsTo(Psychiatrist::class);
    }

        public function specialist()
        {
            return $this->belongsTo(Specialist::class, 'csUserID', 'csUserID');
        }
}
