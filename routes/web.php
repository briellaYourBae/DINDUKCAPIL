<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\PhotoController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')
->Middleware('auth');

Route::resource('users',\App\Http\Controllers\UserController::class)
->middleware('auth');
Route::resource('kiacreate',\App\Http\Controllers\SiswaController::class)
->middleware('auth');
Route::resource('kehilanganktp', \App\Http\Controllers\KehilanganController::class)
->middleware('auth');
Route::resource('pengajuanktp', \App\Http\Controllers\PengajuanController::class)
->middleware('auth');
// Route::resource('kelass',\App\Http\Controllers\KelasController::class)
// ->middleware('auth');

Route::get('/ktp/ktploss', [JoinController::class, 'ktploss'])->name('ktp.ktploss');
Route::get('/ktp/ktpcreate', [JoinController::class, 'ktpcreate'])->name('ktp.ktpcreate');
Route::delete('/kia/{id}', 'SiswaController@destroy')->name('kiacrete.destroy');
Route::get('/photos', [PhotoController::class, 'index'])->name('photos.index');
Route::post('/photos/upload', [PhotoController::class, 'store'])->name('photos.store');

// Route::delete('/kelass/{kelas}', [KelasController::class, 'destroy'])->name('kelass.destroy');





