<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\EvaluacionController;
use App\Http\Controllers\MateriaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::get('user/{id}', [CursosController::class, 'show'])->name('urso.show');
Route::resource('actividadad', ActividadController::class);
Route::resource('curso', CursosController::class);
Route::get('curso/{id}', [CursosController::class, 'show'])->name('curso.show');
Route::resource('asistencia', AsistenciaController::class);
Route::resource('evaluacion', EvaluacionController::class);
Route::resource('materia', MateriaController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
