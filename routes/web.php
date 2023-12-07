<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpecRevController;

use App\Http\Controllers\NoteController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\rehabUpdateMyInfoController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PsychiatristController;

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

Route::get('/patientReviewSpec', [SpecRevController::class, 'patRevSpec'])->name('patRevSpec'); 
Route::post('/patientReviewSpec', [SpecRevController::class, 'postRev'])->name('postRev'); 


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
})->name('therapistdb');

Route::get('/therapistcalendar', function () {
    return view('therapistcalendar');
});
Route::get('/therapistprofile', function () {
    return view('therapistprofile');
});
Route::get('/thnotes', [NoteController::class, 'index'])->name('note.index');
Route::get('/thnotes/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/thnotes/create', [NoteController::class, 'store'])->name('note.store');
Route::get('/thnotes/edit', [NoteController::class, 'edit'])->name('note.edit');

# Dhara

Route::get('/psychiatristHome', function () {
    return view('psychiatristHome');
})->name('psychiatristHome');

/*Route::get('/psychAppt', function () {
    return view('psychAppt');
});

Route::get('/psychInfo', function () {
    return view('psychInfo');
});
Route::get('/psychPrescription', function () {
    return view('psychPrescription');
});*/
Route::get('/psychPrescription', [PrescriptionController::class, 'index'])->name('psychPrescription.index');
Route::post('/psychPrescription', [PrescriptionController::class, 'store'])->name('psychPrescription.store');
Route::get('/prescriptions', [PrescriptionController::class, 'showPrescriptions'])->name('prescriptionView.index');
Route::get('/prescriptions/{id}', [PrescriptionController::class, 'showPrescriptionDetails'])->name('prescriptionView.show');

Route::get('/psychAppt', [AppController::class, 'view'])->name('psychAppt.view');
Route::get('/psychAppt', [AppController::class, 'view'])->name('psychAppt.index');


Route::get('/psychInfo', [App\Http\Controllers\PsychiatristController::class, 'index'])->name('psychInfo.index');




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