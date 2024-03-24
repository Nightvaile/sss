<?php

namespace App\Http\Controllers;
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
        return view('backend.pages.panelKullanicilar');
    }

    /*--------------------------Formlar---------------------------*/
    public function fEkleKullanici()
    {
        return view('backend.pages.formEkleKullanici');
    }

    public function fEkleKategori()
    {
        return view('backend.pages.formEkleKategori');

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
