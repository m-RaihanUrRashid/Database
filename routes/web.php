<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/signup', function () {
    return view('signUp');
});

Route::get('/patientHome', function () {
    return view('patientHome');
});

Route::get('/therapistHome', function () {
    return view('therapistHome');
});
Route::get('/therapistdb', function () {
    return view('therapistdb');
});

Route::get('/psychiatristHome', function () {
    return view('psychiatristHome');
});

Route::get('/psychInfo', function () {
    return view('psychInfo');
});

Route::get('/psychAppt', function () {
    return view('psychAppt');
});

Route::get('/psychPrescription', function () {
    return view('psychPrescription');
});

Route::get('/pharmacyHome', function () {
    return view('pharmacyHome');
});

Route::get('/pharmacyProfile', function () {
    return view('pharmacyProfile');
});

Route::get('/pharmacyPrescriptions', function () {
    return view('pharmacyPrescriptions');
});