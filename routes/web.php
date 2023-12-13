<?php

use App\Http\Controllers\AdmitRehabController;
use App\Http\Controllers\CheckAppntController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpecRevController;
use App\Http\Controllers\MakeAppController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\PharmaPrescriptionController;
use App\Http\Controllers\rehabUpdateMyInfoController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PsychiatristController;
use App\Http\Controllers\rehabViewSpecialistController;
use App\Http\Controllers\rehabAddSpecialistController;


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
Route::post('/patientReviewSpec2', [SpecRevController::class, 'postRev'])->name('postRev'); 
//Route::post('/patientReviewSpec2', [SpecRevController::class, 'postRev'])->name('postRev'); 

Route::post('/patientReviewSpec', [SpecRevController::class, 'postRev2'])->name('postRev2'); 

Route::get('/patientMakeApp', [MakeAppController::class, 'loadSpecs'])->name('loadSpecs'); 
Route::post('/patientMakeApp', [MakeAppController::class, 'saveApp'])->name('saveApp'); 

Route::get('/patientCheckApp', [CheckAppntController::class, 'loadApps'])->name('loadApps'); 
Route::delete('/patientCheckApp', [CheckAppntController::class, 'destroy'])->name('destroy.app');

Route::get('/patientChoseRehab', [AdmitRehabController::class, 'loadRehabs'])->name('loadRehabs'); 

Route::get('/patientHome', function () {
    return view('patientHome');
})->name('patientHome');


Route::get('/signUp', function () {
    return view('signUp');
});
Route::get('/calendar.calendar', function () {
    return view('calendar.calendar');
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


Route::get('/psychAppt', [AppController::class, 'view'])->name('psychAppt.index');
Route::post('/psychAppt/toggle/{cpUserID}/{csUserID}/{dappDate}/{dappTime}', [AppController::class, 'toggle'])->name('psychAppt.toggle');

Route::get('/pharmacyPrescriptions', [PharmaPrescriptionController::class, 'index'])->name('pharmacyPrescriptions.index');


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
Route::get('/psychPrescriptionShow', [PrescriptionController::class, 'showPrescriptions'])->name('psychPrescriptionView.showPrescriptions');

Route::delete('/prescription/{id}', [PrescriptionController::class, 'destroy'])->name('prescription.delete');


// Route::get('/psychAppt', [AppController::class, 'view'])->name('psychAppt.view');
// Route::post('/psychAppt', [AppController::class, 'toggle'])->name('psychAppt.toggle');
Route::get('/psychAppt', [AppController::class, 'view'])->name('psychAppt.index');
Route::post('/psychAppt/toggle/{cpUserID}/{csUserID}/{dappDate}/{dappTime}', [AppController::class, 'toggle'])->name('psychAppt.toggle');
Route::get('/pastAppt', [AppController::class, 'past'])->name('psychAppt.past');
Route::delete('/psychAppt/delete/{cpUserID}/{csUserID}/{dappDate}/{dappTime}', [AppController::class, 'delete'])->name('psychAppt.delete');
// Route::post('/psychAppt/togle/{compositeKey}', [AppController::class, 'toggle']  )->name('psychAppt.toggle');


Route::get('/psychInfo', [App\Http\Controllers\PsychiatristController::class, 'index'])->name('psychInfo.index');




#Nazifa
Route::get('/rehabSupervisorHome', function () {
    return view('rehabSupervisorHome');
})->name('rehabSupervisorHome');

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

Route::post('/rehabAddSpecialist', [rehabAddSpecialistController::class ,'addSpecialist'])->name('add.specialist');

Route::get('/rehabViewSpecialists', [rehabViewSpecialistController::class, 'viewSpecialist'])->name('view.specialist');

Route::get('/rehabRemoveSpecialists', [rehabRemoveSpecialistController::class, 'viewSpecialist'])->name('remove.specialist');
Route::delete('/rehabRemoveSpecialists', [rehabRemoveSpecialistController::class, 'removeSpecialist'])->name('remove1.specialist');


#Michael Jackson
Route::get('/ngo', function () {
    return view('ngo');
});

Route::get('/ngo1', function () {
    return view('ngo1');
});
Route::get('/rehabs', [ngoController::class, 'index'])->name('rehabs.index');