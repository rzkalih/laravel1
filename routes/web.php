<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\KritikController;
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

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'register')->name('auth.register');
    Route::post('/store', 'store')->name('auth.store');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/authentication', 'authentication')->name('auth.authentication');
    Route::post('/logout', 'logout')->name('auth.logout');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
});

Route::get('/', function () {
    return view('auth.register');
});

Route::resource('/cast', CastController::class);
Route::resource('/film', FilmController::class);
Route::resource('/genre', GenreController::class);

Route::get('/film/{films}/peran/create', [PeranController::class, 'create'])->name('peran_create')->middleware('auth');
Route::post('/film/{films}/peran/', [PeranController::class, 'store'])->name('peran_store')->middleware('auth');

Route::get('/film/{films}/kritik/create', [KritikController::class, 'create'])->name('kritik_create')->middleware('auth');
Route::post('/film/{films}/kritik/', [kritikController::class, 'store'])->name('kritik_store')->middleware('auth');
