<?php

use App\Http\Controllers\VeriKontrol;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SayfaKontrol;
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
/*-----------------------PANELLER-------------------------*/
Route::get('/',[SayfaKontrol::class,'pIndex'])->name('pIndex');

Route::get('/kullanicilar',[SayfaKontrol::class,'pKullanicilar'])->name('pKullanicilar');

/*------------------------FORMLAR---------------------------*/
Route::get('/kullanici-ekle',[SayfaKontrol::class,'fEkleKullanici'])->name('fEkleKullanici');
Route::post('/kullanici-ekle',[VeriKontrol::class,'EkleKullanici'])->name('EkleKullanici');

/*-------------------------Urunler----------------------------*/
Route::get('/urun-ekle',[SayfaKontrol::class,'fEkleUrun'])->name('fEkleUrun');

/*--------------------------Kategori------------------------------*/
Route::get('/kategori-ekle',[SayfaKontrol::class,'fEkleKategori'])->name('fEkleKategori');
Route::post('/kategori-ekle',[VeriKontrol::class,'EkleKategori'])->name('EkleKategori');
Route::get('/kategori-duzenle/{id}',[SayfaKontrol::class,'fDuzenleKategori'])->name('fDuzenleKategori');
Route::post('/kategori-duzenle/{id}',[VeriKontrol::class,'DuzenleKategori'])->name('DuzenleKategori');
Route::get('/kategori-sil/{id}',[VeriKontrol::class,'SilKategori'])->name('SilKategori');

/*---------------------------Subeler-----------------------------*/
Route::get('/sube-ekle',[SayfaKontrol::class,'fEkleSube'])->name('fEkleSube');
Route::post('/sube-ekle',[VeriKontrol::class,'EkleSube'])->name('EkleSube');

/*----------------------------Roller-------------------------------*/
Route::get('/rol-ekle',[SayfaKontrol::class,'fEkleRol'])->name('fEkleRol');
Route::post('/rol-ekle',[VeriKontrol::class,'EkleRol'])->name('EkleRol');

/*------------------------------Bedenler-----------------------------------*/
Route::get('/beden-ekle',[SayfaKontrol::class,'fEkleBeden'])->name('fEkleBeden');
Route::post('/beden-ekle',[VeriKontrol::class,'EkleBeden'])->name('EkleBeden');


/*-------------------------Auth--------------------------*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
