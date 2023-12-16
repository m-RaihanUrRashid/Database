<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdmitRehabController;
use App\Http\Controllers\CheckAppntController;
use App\Http\Controllers\PatientProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SpecRevController;
use App\Http\Controllers\MakeAppController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\rehabUpdateMyInfoController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\PharmaProfileController;
use App\Http\Controllers\PharmaPrescController;
use App\Http\Controllers\ngoController;
use App\Http\Controllers\rehabViewSpecialistController;
use App\Http\Controllers\rehabAddSpecialistController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\rehabRemoveSpecialistController;
use App\Http\Controllers\rehabInfoController;

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
Route::delete('/patientCheckApp/destry/{cpUserID}/{csUserID}/{dappDate}/{cappTime}', [CheckAppntController::class, 'destroy'])->name('destroy.app');

Route::get('/patientChoseRehab', [AdmitRehabController::class, 'loadRehabs'])->name('loadRehabs');

Route::get('/patientProfile', [PatientProfileController::class, 'viewInfo'])->name('patientProfile.viewInfo');

Route::get('/patientProfileEdit', [PatientProfileController::class, 'editViewInfo'])->name('editViewInfo');
Route::post('/patientProfileEdit', [PatientProfileController::class, 'updateInfo'])->name('patientProfile.updateInfo'); 


Route::get('/patientHome', function () {
    return view('patientHome');
})->name('patientHome');


Route::get('/signUp', function () {
    return view('signUp');
});
Route::get('/calendar.calendar', function () {
    return view('calendar.calendar');
});

// Route::get('/patientProfile', function () {
//     return view('patientProfile');
// });

# Ikram
Route::get('/pharmacyHome', function () {
    return view('pharmacyHome');
})->name('pharmacyHome');

Route::get('/pharmacyPrescriptions', [PharmaPrescController::class, 'pharmaLoadPresc'])->name('pharmaLoadPresc');
Route::post('/pharmacyPrescriptions/{id}', [PharmaPrescController::class, 'pharmaUpdatePresc'])->name('pharmaUpdatePresc');

Route::get('/pharmacyProfile', [PharmaProfileController::class, 'pharmaLoadProfile'])->name('pharmaLoadProfile');
Route::post('/pharmacyProfile', [PharmaProfileController::class, 'updateProfile'])->name('pharmaUpdateProfile');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/addPharma', [AdminController::class, 'addPharma'])->name('addPharma');;
Route::post('/addPharma', [AdminController::class, 'newPharma'])->name('addPharma.save');
Route::get('/addNGO', [AdminController::class, 'addNGO'])->name('addNGO');;
Route::post('/addNGO', [AdminController::class, 'newNGO'])->name('addNGO.save');

Route::get('/addRehab', function () {
    return view('addRehab');
})->name('addRehab');;
// Route::post('/psychAppt/toggle/{cpUserID}/{csUserID}/{dappDate}/{cappTime}', [AppController::class, 'toggle'])->name('psychAppt.toggle');


Route::get('/psychAppt', [AppController::class, 'view'])->name('psychAppt.index');
Route::post('/psychAppt/toggle/{cpUserID}/{csUserID}/{dappDate}/{cappTime}', [AppController::class, 'toggle'])->name('psychAppt.toggle');

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

Route::get('/therapistprofile', [TherapistController::class, 'index'])->name('th.index');
Route::post('/therapistHome/toggle/{cpUserID}/{csUserID}/{dappDate}/{cappTime}', [AppController::class, 'toggle'])->name('therapistHome.toggle');
Route::delete('/therapistHome/delete/{cpUserID}/{csUserID}/{dappDate}/{cappTime}', [AppController::class, 'delete'])->name('therapistHome.delete');
Route::get('/therapistHome', [AppController::class, 'tview'])->name('tHome.tview');
Route::get('/therapistpa', [AppController::class, 'tpast'])->name('th.past');
Route::get('/thnotes', [NoteController::class, 'index'])->name('note.index');
Route::get('/thnotes/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/thnotes/create', [NoteController::class, 'store'])->name('note.store');
Route::get('/thnotes/edit/{ctsUserID}/{cpUserID}', [NoteController::class, 'edit'])->name('note.edit');
Route::post('/thnotes/edit/{ctsUserID}/{cpUserID}', [NoteController::class, 'update'])->name('note.update');
Route::delete('/thnotes/{ctsUserID}/{cpUserID}/{cNotes}/{dDate}', [NoteController::class, 'delete'])->name('note.destroy');

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
Route::post('/psychAppt/toggle/{cpUserID}/{csUserID}/{dappDate}/{cappTime}', [AppController::class, 'toggle'])->name('psychAppt.toggle');
Route::get('/pastAppt', [AppController::class, 'past'])->name('psychAppt.past');
Route::delete('/psychAppt/delete/{cpUserID}/{csUserID}/{dappDate}/{cappTime}', [AppController::class, 'delete'])->name('psychAppt.delete');
// Route::post('/psychAppt/togle/{compositeKey}', [AppController::class, 'toggle']  )->name('psychAppt.toggle');


Route::get('/psychInfo', [App\Http\Controllers\PsychiatristController::class, 'index'])->name('psychInfo.index');


#Nazifa
Route::get('/rehabSupervisorHome', function () {
    return view('rehabSupervisorHome');
})->name('rehabSupervisorHome');

Route::get('/rehabManageSpecialist', function () {
    return view('rehabManageSpecialist');
});

Route::get('/rehabAddSpecialist', function () {
    return view('rehabAddSpecialist');
});

Route::get('/rehabViewSpecialists', function () {
    return view('rehabViewSpecialists');
});

Route::post('/rehabAddSpecialist', [rehabAddSpecialistController::class, 'addSpecialist'])->name('add.specialist');

Route::get('/rehabViewSpecialists', [rehabViewSpecialistController::class, 'viewSpecialist'])->name('view.specialist');

Route::get('/rehabRemoveSpecialist', [rehabRemoveSpecialistController::class, 'viewSpecialist'])->name('remove.specialist');
Route::delete('/rehabRemoveSpecialist/{csUserID}', [rehabRemoveSpecialistController::class, 'removeSpecialist'])->name('destroy.specialist');

Route::get('/rehabUpdateMyInfo', [rehabUpdateMyInfoController::class, 'loadInfo'])->name('rehabUpdateMyInfo'); #new
Route::post('/rehabUpdateMyInfo', [rehabUpdateMyInfoController::class, 'updateInformation'])->name('rehabUpdateMyInfo.post'); #new

Route::get('/rehabInfo', [rehabInfoController::class, 'loadInfo'])->name('rehabInfo'); #new

#Michael Jackson
Route::get('/ngo', function () {
    return view('ngo');
})->name("ngo");

Route::get('/ngo1', function () {
    return view('ngo1');
});
Route::get('/rehabs', [NgoController::class, 'index'])->name('rehabs.index');
Route::post('/rehab/store', [NgoController::class, 'store'])->name('rehab.store');