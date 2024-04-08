<?php

namespace App\Http\Controllers;
use App\Models\kategoriler;
use App\Models\roller;
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
        $roller = roller::all();
        return view('backend.pages.formEkleKullanici',compact('roller'));
    }

    public function fEkleKategori()
    {
        $kategoriler = kategoriler::all();
        return view('backend.pages.formEkleKategori',compact('kategoriler'));

    }

    public function fEkleSube()
    {
        return view('backend.pages.formEkleSube');

    }

    public function fEkleRol()
    {
        return view('backend.pages.formEkleRol');

    }

    public function fEkleUrun()
    {
        return view('backend.pages.formEkleUrun');
    }

    public function fEkleSecenek()
    {
        return view('backend.pages.formEkleSecenek');
    }
}
