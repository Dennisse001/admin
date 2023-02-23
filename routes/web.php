<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashwebController;
use App\Http\Controllers\DataDesaController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\PariwisataController;
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\PeraturanController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\SaranaUmumController;
use App\Http\Controllers\StrukturDesaController;
use App\Http\Controllers\StrukturKarangController;
use App\Http\Controllers\StrukturPKKController;
use App\Http\Controllers\UMKMControler;

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




Route::middleware(['auth:sanctum','verified','cekrole'])->group(function(){

});

Route::get('/about',[AboutController::class, 'about'])->name('about');
Route::get('/contact',[ContactController::class, 'contact'])->name('contact');
Route::get('/dashweb',[DashwebController::class, 'dashweb'])->name('dashweb');




// admin desa
Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/profil_desa',[ProfilDesaController::class,'profildesa'])->name('profil_desa');
Route::get('/data_desa',[DataDesaController::class,'datadesa'])->name('data_desa');
Route::get('/data_penduduk',[DataPendudukController::class,'datapenduduk'])->name('data_penduduk');
Route::get('/pariwisata',[PariwisataController::class,'pariwisata'])->name('pariwisata');
Route::get('/penghargaan',[PenghargaanController::class,'penghargaan'])->name('penghargaan');
Route::get('/peraturan',[PeraturanController::class,'peraturan'])->name('peraturan');
Route::get('/sarana_umum',[SaranaUmumController::class,'sarana'])->name('sarana_umum');
Route::get('/berita',[BeritaController::class,'berita'])->name('berita');
Route::get('/umkm',[UMKMControler::class,'umkm'])->name('umkm');
Route::get('/struktur_desa',[StrukturDesaController::class,'strukturdesa'])->name('struktur_desa');
Route::get('/struktur_karang',[StrukturKarangController::class,'strukturkarang'])->name('struktur_karang');
Route::get('/struktur_pkk',[StrukturPKKController::class,'strukturpkk'])->name('struktur_pkk');
// Route::get('/struktur_desa',[StrukturDesaController::class,'strukturdesa'])->name('struktur_desa');
