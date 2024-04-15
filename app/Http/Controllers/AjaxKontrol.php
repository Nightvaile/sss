<?php

namespace App\Http\Controllers;

use App\Models\kategoriler;
use App\Models\User;
use Illuminate\Http\Request;

class AjaxKontrol extends Controller
{
    public function EkleKullanici(Request $request)
    {
//        return $request->all(); //bu formdan gelen verileri kontrol etmenizi sağlar
        $kullanici = $request->all();
        User::create($kullanici);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }

    public function EkleKategori(Request $request)
    {
        $kategori = $request->all();
        //return $kategori['kategori_adi']; //test
        if ($kategori['kategori_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Kategori adı giriniz.');
        }
        kategoriler::create($kategori);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }
    public function EkleBeden(Request $request)
    {
        $beden = $request->all();

    }
}
