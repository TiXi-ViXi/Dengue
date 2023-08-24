<?php

use Illuminate\Support\Facades\Route;

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
Route::post('Create/Patient', [App\Http\Controllers\Patient::class, 'CreatePatient'])->name('create.patient');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/hospital', [App\Http\Controllers\Hospital::class, 'HospitalIndex'])->name('hospital_route');
Route::get('/patient', [App\Http\Controllers\Patient::class, 'PatientIndex'])->name('patient_route');
Route::get('/donar', [App\Http\Controllers\Donar::class, 'DonarIndex'])->name('donar_route');
Route::post('/homepatient', [App\Http\Controllers\Patient::class, 'storePatient'])->name('storePatient.class');
Route::post('/homedonar', [App\Http\Controllers\Donar::class, 'storeDonar'])->name('storeDonar.class');
Route::post('/homedonar', [App\Http\Controllers\Hospital::class, 'storeHospital'])->name('storeHospital.class');
