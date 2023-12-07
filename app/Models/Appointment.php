<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    use HasFactory;
    protected $table = "appointment_t";
        public $timestamps = False;
    
        protected $fillable = [
                'cpUserID',
            	'csUserID'	,
                'dappDate'	,
                'dappTime'	,
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
}
