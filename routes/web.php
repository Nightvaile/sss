<?php

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
/*-----------------------Paneller-------------------------*/
Route::get('/',[SayfaKontrol::class,'pIndex'])->name('pIndex');

Route::get('/kullanicilar',[SayfaKontrol::class,'pKullanicilar'])->name('pKullanicilar');

/*------------------------Formlar---------------------------*/
Route::get('/kullanici-ekle',[SayfaKontrol::class,'fEkleKullanici'])->name('fEkleKullanici');

Route::get('/kategori-ekle',[SayfaKontrol::class,'fEkleKategori'])->name('fEkleKategori');

Route::get('/sube-ekle',[SayfaKontrol::class,'fEkleSube'])->name('fEkleSube');

Route::get('/rol-ekle',[SayfaKontrol::class,'fEkleRol'])->name('fEkleRol');

Route::get('/urun-ekle',[SayfaKontrol::class,'fEkleUrun'])->name('fEkleUrun');

Route::get('/secenek-ekle',[SayfaKontrol::class,'fEkleSecenek'])->name('fEkleSecenek');

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
