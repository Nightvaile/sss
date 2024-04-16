<?php

namespace App\Http\Controllers;
use App\Models\bedenler;
use App\Models\kategoriler;
use App\Models\roller;
use App\Models\urunler;
use App\Models\User;
use Illuminate\Http\Request;

class SayfaKontrol extends Controller
{
    /*--------------------------Paneller---------------------------*/
    public function pIndex()
    {
        return view('backend.pages.panelIndex');
    }

    public function pKullanicilar()
    {
        $kullanicilar = User::with('rol')->get();//with models da kullanılan fonksiyon adı

//        return dd($kullanicilar);
        return view('backend.pages.panelKullanicilar',compact('kullanicilar'));
    }

    /*--------------------------Formlar---------------------------*/
    public function fEkleKullanici()
    {
        $Users = User::all();
        $roller = roller::all();
        return view('backend.pages.formEkleKullanici',compact('Users','roller'));
    }

    public function fEkleKategori()
    {
        $kategoriler = kategoriler::with('ustKategori')->get();
        return view('backend.pages.formEkleKategori',compact('kategoriler'));
    }

    public function fEkleSube()
    {
        return view('backend.pages.formEkleSube');
    }

    public function fEkleRol()
    {
        $roller = roller::all();
        return view('backend.pages.formEkleRol',compact('roller'));
    }

    public function fEkleUrun()
    {
        $urunler = urunler::all();
        return view('backend.pages.formEkleUrun',compact('urunler'));
    }

    public function fEkleBeden()
    {
        $bedenler = bedenler::all();
        return view('backend.pages.formEkleSecenek',compact('bedenler'));
    }
}
