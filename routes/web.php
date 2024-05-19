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


/*-------------------------Auth--------------------------*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*-----------------------PANELLER-------------------------*/
    Route::get('/',[SayfaKontrol::class,'pIndex'])->name('pIndex');

    Route::get('/kullanicilar',[SayfaKontrol::class,'pKullanicilar'])->name('pKullanicilar');
    Route::get('/kullanici-sil/{id}',[VeriKontrol::class,'SilKullanici'])->name('SilKullanici');

    /*-------------------------Stoklar-----------------------------*/
    Route::get('/stoklar',[SayfaKontrol::class,'pStok'])->name('pStok');

    /*-------------------------Stoklar Haraketleri-----------------------------*/
    Route::get('/stok-haraketleri',[SayfaKontrol::class,'pStokHaraket'])->name('pStokHaraket');

    /*------------------------URUN FORMLARI---------------------------*/
    /*------------------------------Bedenler--------------------------*/
    Route::get('/beden-ekle',[SayfaKontrol::class,'fEkleBeden'])->name('fEkleBeden');
    Route::post('/beden-ekle',[VeriKontrol::class,'EkleBeden'])->name('EkleBeden');
    Route::get('/beden-duzenle/{id}',[SayfaKontrol::class,'fDuzenleBeden'])->name('fDuzenleBeden');
    Route::post('/beden-duzenle/{id}',[VeriKontrol::class,'DuzenleBeden'])->name('DuzenleBeden');
    Route::get('/beden-sil/{id}',[VeriKontrol::class,'SilBeden'])->name('SilBeden');

    /*----------------------------Renkler-------------------------------*/
    Route::get('/renk-ekle',[SayfaKontrol::class,'fEkleRenk'])->name('fEkleRenk');
    Route::post('/renk-ekle',[VeriKontrol::class,'EkleRenk'])->name('EkleRenk');
    Route::get('/renk-duzenle/{id}',[SayfaKontrol::class,'fDuzenleRenk'])->name('fDuzenleRenk');
    Route::post('/renk-duzenle/{id}',[VeriKontrol::class,'DuzenleRenk'])->name('DuzenleRenk');
    Route::get('/renk-sil/{id}',[VeriKontrol::class,'SilRenk'])->name('SilRenk');

    /*----------------------------Markalar-------------------------------*/
    Route::get('/marka-ekle',[SayfaKontrol::class,'fEkleMarka'])->name('fEkleMarka');
    Route::post('/marka-ekle',[VeriKontrol::class,'EkleMarka'])->name('EkleMarka');
    Route::get('/marka-duzenle/{id}',[SayfaKontrol::class,'fDuzenleMarka'])->name('fDuzenleMarka');
    Route::post('/marka-duzenle/{id}',[VeriKontrol::class,'DuzenleMarka'])->name('DuzenleMarka');
    Route::get('/marka-sil/{id}',[VeriKontrol::class,'SilMarka'])->name('SilMarka');

    /*--------------------------Kategori------------------------------*/
    Route::get('/kategori-ekle',[SayfaKontrol::class,'fEkleKategori'])->name('fEkleKategori');
    Route::post('/kategori-ekle',[VeriKontrol::class,'EkleKategori'])->name('EkleKategori');
    Route::get('/kategori-duzenle/{id}',[SayfaKontrol::class,'fDuzenleKategori'])->name('fDuzenleKategori');
    Route::post('/kategori-duzenle/{id}',[VeriKontrol::class,'DuzenleKategori'])->name('DuzenleKategori');
    Route::get('/kategori-sil/{id}',[VeriKontrol::class,'SilKategori'])->name('SilKategori');

    /*----------------------------Seriler-------------------------------*/
    Route::get('/seri-ekle',[SayfaKontrol::class,'fEkleSeri'])->name('fEkleSeri');
    Route::post('/seri-ekle',[VeriKontrol::class,'EkleSeri'])->name('EkleSeri');
    Route::get('/seri-duzenle/{id}',[SayfaKontrol::class,'fDuzenleSeri'])->name('fDuzenleSeri');
    Route::post('/seri-duzenle/{id}',[VeriKontrol::class,'DuzenleSeri'])->name('DuzenleSeri');
    Route::get('/seri-sil/{id}',[VeriKontrol::class,'SilSeri'])->name('SilSeri');

    /*-------------------------Urunler----------------------------*/
    Route::get('/urun-ekle',[SayfaKontrol::class,'fEkleUrun'])->name('fEkleUrun');
    Route::post('/urun-ekle',[VeriKontrol::class,'EkleUrun'])->name('EkleUrun');
    Route::get('/urun-duzenle/{id}',[SayfaKontrol::class,'fDuzenleUrun'])->name('fDuzenleUrun');
    Route::post('/urun-duzenle/{id}',[VeriKontrol::class,'DuzenleUrun'])->name('DuzenleUrun');
    Route::get('/urun-sil/{id}',[VeriKontrol::class,'SilUrun'])->name('SilUrun');

    /*------------------------------YONETICI FORMLARI------------------------------*/
    /*--------------------------Kullanicilar------------------------------*/
    Route::get('/kullanici-ekle',[SayfaKontrol::class,'fEkleKullanici'])->name('fEkleKullanici');
    Route::post('/kullanici-ekle',[VeriKontrol::class,'EkleKullanici'])->name('EkleKullanici');

    /*---------------------------Subeler-----------------------------*/
    Route::get('/sube-ekle',[SayfaKontrol::class,'fEkleSube'])->name('fEkleSube');
    Route::post('/sube-ekle',[VeriKontrol::class,'EkleSube'])->name('EkleSube');

    /*----------------------------Roller-------------------------------*/
    Route::get('/rol-ekle',[SayfaKontrol::class,'fEkleRol'])->name('fEkleRol');
    Route::post('/rol-ekle',[VeriKontrol::class,'EkleRol'])->name('EkleRol');

    /*--------------------------------------STOK FORMLARI-----------------------------------------*/
    /*-------------------------Stoklar-----------------------------*/
    Route::get('/stok-ekle',[SayfaKontrol::class,'fEkleStok'])->name('fEkleStok');
    Route::post('/stok-ekle',[VeriKontrol::class,'EkleStok'])->name('EkleStok');

    /*------------------------------Stok Haraket--------------------------------*/
    Route::get('/stok-haraket-ekle',[SayfaKontrol::class,'fEkleStokHaraket'])->name('fEkleStokHaraket');
    Route::post('/stok-haraket-ekle',[VeriKontrol::class,'EkleStokHaraket'])->name('EkleStokHaraket');
});

require __DIR__.'/auth.php';
