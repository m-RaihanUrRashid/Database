<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NgoContact  extends Model
{
    
        use HasFactory;
        
        protected $table = "ngo_contact_t";
        public $timestamps = False;
       protected $primaryKey = 'cNGO_ID';
        protected $fillable = [
            'cNGO_ID',
            'cContact'
           
        ];
        public function ngocontact()
        {
            return $this->belongsTo(Ngo::class);
        }

    }
