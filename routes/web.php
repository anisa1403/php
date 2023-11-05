<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [ContenController::class, 'index']);
Route::get('/contak',[ContenController::class, 'contak']);
Route::resource('mapel', MapelController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('buku', BukuController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.proses')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [ContenController::class, 'index'])->name('home.index')->middleware('auth');
Route::get('/logout',[UserController::class,'logout'])->middleware('auth');

Route::get('/changePassword',[UserController::class,'showChangePasswordForm'])->middleware('auth');
Route::post('/changePassword',[UserController::class,'changePassword'])->name('changePassword')->middleware('auth');
