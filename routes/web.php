<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



# Raihan
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('/signUp', [AuthController::class, 'signUp'])->name('signUp');
Route::post('/signUp', [AuthController::class, 'signUpPost'])->name('signUp.post');

Route::get('/patientHome', function () {
    return view('patientHome');
})->name('patientHome');


Route::get('/signUp', function () {
    return view('signUp');
});
Route::get('/calendar.calendar', function () {
    return view('calendar.calendar');
});
Route::get('/patientAppointment', function () {
    return view('patientAppointment');
});



Route::get('/patientChoseSpec', function () {
    return view('patientChoseSpec');
});

Route::get('/patientRehab', function () {
    return view('patientRehab');
});

Route::get('/patientChoseRehab', function () {
    return view('patientChoseRehab');
});

Route::get('/patientReviewSpec', function () {
    return view('patientReviewSpec');
});

Route::get('/patientProfile', function () {
    return view('patientProfile');
});

# Ikram
Route::get('/pharmacyHome', function () {
    return view('pharmacyHome');
});

Route::get('/pharmacyPrescriptions', function () {
    return view('pharmacyPrescriptions');
});

Route::get('/pharmacyProfile', function () {
    return view('pharmacyProfile');
});


# Gazi
Route::get('/therapistHome', function () {
    return view('therapistHome');
});
Route::get('/therapistdb', function () {
    return view('therapistdb');
});
Route::get('/therapistnotes', function () {
    return view('therapistnotes');
});
Route::get('/therapistcalendar', function () {
    return view('therapistcalendar');
});
Route::get('/therapistprofile', function () {
    return view('therapistprofile');
});
Route::get('/thnotes', [NoteController::class, 'index'])->name('notes.index');
Route::get('/thnotes/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('/thnotes', [NoteController::class, 'store'])->name('notes.store');

# Dhara
Route::get('/psychiatristHome', function () {
    return view('psychiatristHome');
});

Route::get('/psychAppt', function () {
    return view('psychAppt');
});

Route::get('/psychInfo', function () {
    return view('psychInfo');
});

Route::get('/psychPrescription', function () {
    return view('psychPrescription');
});


#Nazifa
Route::get('/rehabSupervisorHome', function () {
    return view('rehabSupervisorHome');
});

Route::get('/rehabManageSpecialist', function () {
    return view('rehabManageSpecialist');
});

Route::get('/rehabInfo', function () {
    return view('rehabInfo');
});

Route::get('/rehabUpdateMyInfo', function () {
    return view('rehabUpdateMyInfo');
});

Route::get('/rehabAddSpecialist', function () {
    return view('rehabAddSpecialist');
});

Route::get('/rehabRemoveSpecialist', function () {
    return view('rehabRemoveSpecialist');
});

Route::get('/rehabViewSpecialists', function () {
    return view('rehabViewSpecialists');
});

#Michael Jackson
Route::get('/ngo', function () {
    return view('ngo');
});

Route::get('/ngo1', function () {
    return view('ngo1');
});