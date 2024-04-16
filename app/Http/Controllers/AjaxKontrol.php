<?php

namespace App\Http\Controllers;

use App\Models\bedenler;
use App\Models\kategoriler;
use App\Models\roller;
use App\Models\subeler;
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
        if ($beden['beden_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Beden adı giriniz.');
        }
        bedenler::create($beden);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }

    public function EkleRol(Request $request)
    {
        $rol = $request->all();
        if ($rol['rol_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Rol adı giriniz.');
        }
        roller::create($rol);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }

    public function EkleSube(Request $request)
    {
        $sube = $request->all();
        if ($sube['sube_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Şube adı giriniz.');
        }
        subeler::create($sube);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }
}
