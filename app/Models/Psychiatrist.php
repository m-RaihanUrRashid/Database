<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psychiatrist extends Model
{
    use HasFactory;

    protected $table = "psychiatrist_t";
    public $timestamps = false;


    public function index(Request $request)
    {
        // Get the user data from the session
        $user = $request->session()->get('user');

        // Pass user data to the view
        return view('psychiatristHome', ['user' => $user]);
    }
    public function prescription()
    {
        return $this->hasMany(Prescription::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }


}
