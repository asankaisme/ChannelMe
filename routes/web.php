<?php

use App\Http\Controllers\DiagnosisController;
use App\Http\Controllers\DrugController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Models\Patient;
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
    return view('auth.login');
});

Route::middleware('auth')->group(function() {
    Route::get('/home', function(){
        return view('home');
    })->name('home');

    Route::resources([
        'patients' => PatientController::class,
        'drug' => DrugController::class,
    ]);
    
    Route::get('/patients/reportHistory/{id}', [DiagnosisController::class, 'viewHistory'])->name('viewHistory');

    Route::get('/diagnosis/{patientId}', [DiagnosisController::class, 'addDiagnosis'])->name('diagnosis');
    Route::post('/diagnosis/{patientId}', [DiagnosisController::class, 'saveDiagnosisReport'])->name('diagnosis');

    Route::get('/issueDrug/{patientId}', function($patientId){
        return view('issueDrugs.issuePage', compact('patientId'));
    })->name('issueDrugs');

    Route::get('/prescription/{diagnosis}', [PrescriptionController::class, 'showPrescription'])->name('showPrescriptionForm');

    Route::get('/pharmacy', function(){
        return view('pharmacy.index');
    })->name('pharmacy');
});


