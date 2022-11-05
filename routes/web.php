<?php

use App\Http\Controllers\SymptomController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Symptom;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SymptomController::class, 'index'])->name('home');
Route::get('/diagnosis', [SymptomController::class, 'diagnosis'])->name('diagnosis');
Route::post('/diagnosis', [SymptomController::class, 'diagnosisVerify'])->name('diagnosis.verify');
