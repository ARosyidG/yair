<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PreViewController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\test;
use App\Models\Anggota;

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

Route::get('/', [HomeController::class, "index"]);
Route::resource('/Surat', SuratController::class)->middleware('auth:anggotas');
Route::get('/test', [test::class, "test"])->middleware('auth:anggotas');
Route::get('/Login', [LoginController::class, "index"])->name('login');
Route::get('/Biodata', [BiodataController::class, "index"])->middleware('auth:anggotas');
Route::get('/Preview/{id}', [PreViewController::class, "view"])->middleware('auth:anggotas');
Route::post('/Login', [LoginController::class, 'authenticate']);
Route::resource('/Anggota', AnggotaController::class)->middleware('auth:anggotas');
Route::get('/Surat/Sign/{id}', [SuratController::class,'Sign']);
Route::post('/Logout', [LoginController::class, 'logout']);

Route::get('/Signed/{id}', [SuratController::class, 'Signed']);