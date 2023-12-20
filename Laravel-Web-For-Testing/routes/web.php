<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\DataHasilAkhirController;
use App\Http\Controllers\DataPerhitunganController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SubKriteriaController;
use App\Http\Controllers\SubKriteriaController1;
use App\Http\Controllers\SubKriteriaController2;
use App\Http\Controllers\SubKriteriaController3;
use App\Http\Controllers\SubKriteriaController4;
use App\Http\Controllers\SubKriteriaController5;
use App\Http\Controllers\SubKriteriaController6;
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

Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'authenticate');
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'index')->name('register');
        Route::post('/register', 'store');
    });
});

Route::get('/', [HomeController::class, 'cover'])->name('cover');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('/data-kriteria', KriteriaController::class)->only(['index', 'edit', 'update']);

    Route::resource('/data-sub-kriteria', SubKriteriaController::class)->only(['index', 'edit', 'update']);
    Route::resource('/data-sub-kriteria1', SubKriteriaController1::class)->only(['edit', 'update']);
    Route::resource('/data-sub-kriteria2', SubKriteriaController2::class)->only(['edit', 'update']);
    Route::resource('/data-sub-kriteria3', SubKriteriaController3::class)->only(['edit', 'update']);
    Route::resource('/data-sub-kriteria4', SubKriteriaController4::class)->only(['edit', 'update']);
    Route::resource('/data-sub-kriteria5', SubKriteriaController5::class)->only(['edit', 'update']);
    Route::resource('/data-sub-kriteria6', SubKriteriaController6::class)->only(['edit', 'update']);

    Route::resource('/data-alternatif', AlternatifController::class)->except(['show', 'destroy']);

    Route::resource('/data-penilaian', PenilaianController::class)->except(['show', 'destroy']);

    Route::controller(DataPerhitunganController::class)->group(function () {
        Route::get('/data-perhitungan', 'index')->name('data-perhitungan.index');
        Route::get('/data-perhitungan/hitung', 'hitung')->name('data-perhitungan.result');
    });

    Route::controller(DataHasilAkhirController::class)->group(function () {
        Route::get('/data-hasil-akhir', 'index')->name('data-hasil-akhir.index');
        Route::get('/data-hasil-akhir/print', 'printDataHasil')->name('data-hasil-akhir.result');
    });

    Route::resource('/data-user', UserController::class)->only(['index'])->middleware('admin');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
