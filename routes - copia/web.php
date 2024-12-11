<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CiudadanoController;
use App\Http\Controllers\SagacController;
use App\Http\Controllers\SigeController;
use App\Http\Controllers\SimpatizanteController;
use App\Http\Controllers\VotanteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('loginn');
Route::get('/register', [AuthController ::class, 'showForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [AuthController::class, 'showDashboard'])->name('dashboard');

Route::post('logout', [AuthController::class, 'logout'])->name('logout');



//SIGE
Route::get('sms', [SigeController::class, 'sms'])->name('sms');
Route::get('email', [SigeController::class, 'email'])->name('email');
Route::get('wa', [SigeController::class, 'wa'])->name('wa');

//SAGAC
Route::get('alta_evento', [SagacController::class, 'alta_evento'])->name('alta_evento');
Route::get('consulta_eventos', [SagacController::class, 'consulta_eventos'])->name('consulta_eventos');
Route::post('eventos.store', [SagacController::class, 'store'])->name('eventos.store');
Route::resource('eventos', SagacController::class);

//CIUDADANO
Route::get('alta_ciudadano', [CiudadanoController::class, 'alta_ciudadano'])->name('alta_ciudadano');
Route::post('alta-ciudadano', [CiudadanoController::class, 'store'])->name('alta_ciudadano.store');
Route::get('consulta_ciudadano', [CiudadanoController::class, 'consulta_ciudadanos'])->name('consulta_ciudadano');


//SIMPATIZANTE
Route::get('alta_simpatizante', [SimpatizanteController::class, 'alta_simpatizante'])->name('alta_simpatizante');
Route::post('alta-simpatizante', [SimpatizanteController::class, 'store'])->name('alta_simpatizante.store');
Route::get('consulta_simpatizantes', [SimpatizanteController::class, 'consulta_simpatizantes'])->name('consulta_simpatizantes');


//VOTANTE
Route::get('alta_votante', [VotanteController::class, 'alta_votante'])->name('alta_votante');
Route::post('alta-votante', [VotanteController::class, 'store'])->name('alta_votantes.store');
Route::get('consulta_votantes', [VotanteController::class, 'consulta_votantes'])->name('consulta_votantes');