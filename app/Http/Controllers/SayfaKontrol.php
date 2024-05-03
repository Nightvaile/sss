<?php

namespace App\Http\Controllers;

use App\Models\bedenler;
use App\Models\kategoriler;
use App\Models\markalar;
use App\Models\renkler;
use App\Models\roller;
use App\Models\seriler;
use App\Models\subeler;
use App\Models\urunler;
use App\Models\User;
use Illuminate\Http\Request;

class SayfaKontrol extends Controller
{
    /*--------------------------------------------------PANELLER------------------------------------------------*/
    public function pIndex()
    {
        $urunler = urunler::with('beden','renk','seri')->get();
        return view('backend.pages.panelIndex', compact('urunler'));
    }

    public function pKullanicilar()
    {
        $kullanicilar = User::with('rol')->get();//with models da kullanılan fonksiyon adı

//        dd($kullanicilar);
        return view('backend.pages.panelKullanicilar', compact('kullanicilar'));
    }

    /*-------------------------------------------FORMLAR------------------------------------------------*/
    /*------------------------------------Kullanici-----------------------------------*/
    public function fEkleKullanici()
    {
        $Users = User::all();
        $roller = roller::all();
        return view('backend.pages.formEkleKullanici', compact('Users', 'roller'));
    }

    /*-----------------------------------Sube------------------------------------*/
    public function fEkleSube()
    {
        $yetkililer = User::all();
        $subeler = subeler::with('yetkili')->get();
        return view('backend.pages.formEkleSube', compact('subeler', 'yetkililer'));
    }

    /*-----------------------------------Rol-----------------------------------*/
    public function fEkleRol()
    {
        $roller = roller::all();
        return view('backend.pages.formEkleRol', compact('roller'));
    }
    /*------------------------------------URUN YONETIMI---------------------------------------*/
    /*----------------------------------Beden------------------------------------*/
    public function fEkleBeden()
    {
        $bedenler = bedenler::all();
        return view('backend.pages.formEkleBeden', compact('bedenler'));
    }

    public function fDuzenleBeden($id)
    {
        $veri = bedenler::where('beden_ID', $id)->first();
        if ($veri)
            return view('backend.pages.formDuzenleBeden', compact('veri'));
        else
            return redirect()->route('fEkleBeden')->with('fail','Geçersiz ID.');
    }

    /*------------------------------------Renk------------------------------------*/
    public function fEkleRenk()
    {
        $renkler = renkler::all();
        return view('backend.pages.formEkleRenk', compact('renkler'));
    }

    public function fDuzenleRenk($id)
    {
        $veri = renkler::where('renk_ID', $id)->first();
        if ($veri)
            return view('backend.pages.formDuzenleRenk', compact('veri'));
        else
            return redirect()->route('fEkleRenk')->with('fail','Geçersiz ID.');
    }

    /*-------------------------------------Marka------------------------------------*/
    public function fEkleMarka()
    {
        $markalar = markalar::all();
        return view('backend.pages.formEkleMarka', compact('markalar'));
    }

    public function fDuzenleMarka($id)
    {
        $veri = markalar::where('marka_ID', $id)->first();
        if ($veri)
            return view('backend.pages.formDuzenleMarka', compact('veri'));
        else
            return redirect()->route('fEkleMarka')->with('fail','Geçersiz ID.');
    }

    /*-------------------------------Kategori--------------------------------------*/
    public function fEkleKategori()
    {
        $kategoriler = kategoriler::with('ustKategori')->get();
        return view('backend.pages.formEkleKategori', compact('kategoriler'));
    }

    public function fDuzenleKategori($id)
    {
        $veri = kategoriler::where('kategori_ID', $id)->first();
        $kategoriler = kategoriler::all();
        /*        dd($veri);*/

        if ($veri)
            return view('backend.pages.formDuzenleKategori', compact('veri', 'kategoriler'));
        else
            return redirect()->route('fEkleKategori');
    }

    /*------------------------------------Seri------------------------------------*/
    public function fEkleSeri()
    {
        $seriler = seriler::all();
        return view('backend.pages.formEkleSeri', compact('seriler'));
    }

    public function fDuzenleSeri()
    {

    }

    /*-----------------------------------Urun----------------------------------*/
    public function fEkleUrun()
    {
        $urunler = urunler::all();
        return view('backend.pages.formEkleUrun', compact('urunler'));
    }

    public function fDuzenleUrun()
    {

    }
}
