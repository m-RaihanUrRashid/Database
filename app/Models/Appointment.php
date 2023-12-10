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
        //protected $primaryKey = ['cpUserID', 'csUserID', 'dappDate', 'dappTime'];
    
        public function yourMethod($cpUserID, $csUserID, $dappDate, $dappTime)
    {
        // Use dd() to check the values
        dd($cpUserID, $csUserID, $dappDate, $dappTime);

        // Rest of your logic
    }
    

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
            return $this->belongsTo(Specialist::class);
        }
}
