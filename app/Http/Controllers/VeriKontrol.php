<?php

namespace App\Http\Controllers;

use App\Models\bedenler;
use App\Models\kategoriler;
use App\Models\roller;
use App\Models\seriler;
use App\Models\subeler;
use App\Models\markalar;
use App\Models\urunler;
use App\Models\User;
use Illuminate\Http\Request;

class VeriKontrol extends Controller
{
    /*-----------------------------Kullanici-------------------------------*/
    public function EkleKullanici(Request $request)
    {
//        return $request->all(); //bu formdan gelen verileri kontrol etmenizi sağlar
        $kullanici = $request->all();
        User::create($kullanici);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }

    /*-----------------------------Rol-------------------------------*/
    public function EkleRol(Request $request)
    {
        $rol = $request->all();
        if ($rol['rol_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Rol adı giriniz.');
        }
        roller::create($rol);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }

    /*-----------------------------Sube-------------------------------*/
    public function EkleSube(Request $request)
    {
        $sube = $request->all();
        if ($sube['sube_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Şube adı giriniz.');
        }
        subeler::create($sube);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }
    /*------------------------------------URUN YONETIMI---------------------------------------*/
    /*-----------------------------Beden-------------------------------*/
    public function EkleBeden(Request $request)
    {
        $beden = $request->all();
        if ($beden['beden_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Beden adı giriniz.');
        }
        bedenler::create($beden);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }

    public function DuzenleBeden(Request $request, $id)
    {
        bedenler::where('beden_id', $id)->update([
            'beden_adi' => $request->beden_adi,
        ]);
        return redirect()->route('fEkleBeden')->with('success', 'Beden güncellendi.');
    }

    public function SilBeden($id)
    {
        $veri = bedenler::where('beden_ID', $id)->first();
//                dd($veri);

        if ($veri)
        {
            bedenler::where('beden_ID', $id)->delete();
            return redirect()->route('fEkleBeden')->with('fail', 'Beden silindi!');
        } else
            return redirect()->route('fEkleBeden')->with('info', 'Beden silinemedi!');
    }

    /*----------------------------------Renk----------------------------------*/
    public function EkleRenk()
    {

    }

    public function DuzenleRenk()
    {

    }

    public function SilRenk()
    {

    }

    /*----------------------------------Marka----------------------------------*/
    public function EkleMarka()
    {

    }

    public function DuzenleMarka()
    {

    }

    public function SilMarka()
    {

    }

    /*-----------------------------Kategori-------------------------------*/
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

    public function DuzenleKategori(Request $request, $id)
    {
        /*$request->validate([

        ]);*/

        kategoriler::where('kategori_id', $id)->update([
            'kategori_adi' => $request->kategori_adi,
            'ust_kategori' => $request->ust_kategori,
        ]);
        return redirect()->route('fEkleKategori')->with('success', 'Kategori güncellendi.');
    }

    public function SilKategori($id)
    {
        $veri = kategoriler::where('kategori_ID', $id)->first();
        /*        dd($veri);*/

        if ($veri) {
            kategoriler::where('kategori_ID', $id)->delete();
            return redirect()->route('fEkleKategori')->with('fail', 'Kategori silindi!');
        } else
            return redirect()->route('fEkleKategori')->with('info', 'Kategori silinemedi!');
    }

    /*------------------------------Seri-------------------------------*/
    public function EkleSeri(Request $request)
    {
        $seri = $request->all();
        if ($seri['seri_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Seri adı giriniz.');
        }
        seriler::create($seri);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }

    public function DuzenleSeri()
    {

    }

    public function SilSeri()
    {

    }
    /*-----------------------------Urun--------------------------------*/
    public function EkleUrun(Request $request)
    {
        $urun = $request->all();
        if ($urun['urun_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Ürün adı giriniz.');
        }
        urunler::create($urun);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }

    public function DuzenleUrun(Request $request)
    {

    }

    public function SilUrun(Request $request)
    {

    }
}
