<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User_cursoController;
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
Route::resource('usercurso', User_cursoController::class);
Route::resource('actividad', ActividadController::class);
Route::resource('curso', CursosController::class);
Route::resource('asistencia', AsistenciaController::class);
Route::resource('evaluacion', EvaluacionController::class);
Route::resource('evaluacion2', EvaluacionController::class);
Route::resource('materia', MateriaController::class);
Route::resource('tema', TemaController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
