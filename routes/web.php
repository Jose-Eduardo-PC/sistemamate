<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemaController;
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
Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{user}',[UserController::class, 'update'])->name('user.update');
Route::resource('actividad', ActividadController::class);
Route::get('actividad/{id}', [ActividadController::class, 'show'])->name('actividad.show');
Route::get('actividad{actividad}/edit', [ActividadController::class, 'edit'])->name('actividad.adedit');
Route::put('actividad{actividad}',[ActividadController::class, 'update'])->name('actividad.update');
Route::resource('curso', CursosController::class);
Route::get('curso/{id}', [CursosController::class, 'show'])->name('curso.show');
Route::get('curso/{curso}/edit', [CursosController::class, 'edit'])->name('curso.edit');
Route::put('curso/{curso}',[CursosController::class, 'update'])->name('curso.update');
Route::resource('asistencia', AsistenciaController::class);
Route::get('asistencia/{id}', [AsistenciaController::class, 'show'])->name('asistencia.show');
Route::get('asistencia/{asistencia}/edit', [AsistenciaCursoController::class, 'edit'])->name('asistencia.edit');
Route::put('asistencia/{asistencia}',[AsistenciaController::class, 'update'])->name('asistencia.update');
Route::resource('evaluacion', EvaluacionController::class);
Route::get('evaluacion/{id}', [EvaluacionController::class, 'show'])->name('evaluacion.show');
Route::get('evaluacion/{evaluacion}/edit', [EvaluacionController::class, 'edit'])->name('evaluacion.edit');
Route::put('evaluacion{evaluacion}',[EvaluacionController::class, 'update'])->name('evaluacion.update');
Route::resource('materia', MateriaController::class);
Route::get('materia/{materia}', [MateriaController::class, 'show'])->name('materia.show');
Route::get('materia/{materia}/edit', [MateriaController::class, 'edit'])->name('materia.edit');
Route::put('materia/{materia}',[MateriaController::class, 'update'])->name('materia.update');
Route::resource('tema', TemaController::class);
Route::get('tema/{tema}', [TemaController::class, 'show'])->name('tema.show');
Route::get('tema/{tema}/edit', [TemaController::class, 'edit'])->name('tema.edit');
Route::put('tema/{tema}',[TemaController::class, 'update'])->name('tema.update');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
