<?php

namespace App\Http\Controllers;

use App\Models\bedenler;
use App\Models\kategoriler;
use App\Models\renkler;
use App\Models\roller;
use App\Models\seriler;
use App\Models\subeler;
use App\Models\markalar;
use App\Models\urunler;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    public function SilKullanici($id)
    {
        $veri = User::whereId($id)->first();

        if ($veri) {
            User::whereId($id)->delete();
            return redirect()->route('pKullanicilar')->with('success', 'Kullanıcı silindi!');
        } else
            return redirect()->route('pKullanicilar')->with('fail', 'Kullanıcı silinemedi!');
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

        if ($veri) {
            bedenler::where('beden_ID', $id)->delete();
            return redirect()->route('fEkleBeden')->with('success', 'Beden silindi!');
        } else
            return redirect()->route('fEkleBeden')->with('fail', 'Beden silinemedi!');
    }

    /*----------------------------------Renk----------------------------------*/
    public function EkleRenk(Request $request)
    {
        $renk = $request->all();
        if ($renk['renk_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Renk adı giriniz.');
        }
        renkler::create($renk);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }

    public function DuzenleRenk(Request $request, $id)
    {
        renkler::where('renk_id', $id)->update([
            'renk_adi' => $request->renk_adi,
        ]);
        return redirect()->route('fEkleRenk')->with('success', 'Renk güncellendi.');
    }

    public function SilRenk($id)
    {
        $veri = renkler::where('renk_ID', $id)->first();

        if ($veri) {
            renkler::where('renk_ID', $id)->delete();
            return redirect()->route('fEkleRenk')->with('success', 'Renk silindi!');
        } else
            return redirect()->route('fEkleRenk')->with('fail', 'Renk silinemedi!');
    }

    /*----------------------------------Marka----------------------------------*/
    public function EkleMarka(Request $request)
    {
        $marka = $request->all();

        if ($marka['marka_adi'] === null) {
            return back()->withFail('Kaydedilemedi. marka adı giriniz.');
        }
        markalar::create($marka);
        return back()->withSuccess('Başarıyla kaydedildi.');
    }

    public function DuzenleMarka(Request $request, $id)
    {
        if ($id)
            return redirect()->route('fEkleMarka')->with('fail', 'Geçersiz ID!');
        markalar::where('marka_id', $id)->update([
            'marka_adi' => $request->marka_adi,
        ]);
        return redirect()->route('fEkleMarka')->with('success', 'Marka güncellendi.');
    }

    public function SilMarka($id)
    {
        if ($id) {
            $veri = markalar::where('marka_ID', $id)->first();
            if ($veri) {
                markalar::where('marka_ID', $id)->delete();
                return redirect()->route('fEkleMarka')->with('success', 'Marka silindi!');
            } else
                return redirect()->route('fEkleMarka')->with('fail', 'Marka1 silinemedi!');
        } else
            return redirect()->route('fEkleMarka')->with('fail', 'Marka2 silinemedi!');
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
            return redirect()->route('fEkleKategori')->with('success', 'Kategori silindi!');
        } else
            return redirect()->route('fEkleKategori')->with('fail', 'Kategori silinemedi!');
    }

    /*------------------------------Seri-------------------------------*/
    /*public function EkleSeri(Request $request)
    {
        $seri = $request->all();
        if ($seri['urun_adi'] === null) {
            return back()->withFail('Kaydedilemedi. Seri adı giriniz.');
        }
        seriler::create($seri);
        return back()->withSuccess('Başarıyla kaydedildi.');
        $seri = $request->validate([
            'urun_adi' => 'required|string|max:255',
            'seri_kodu' => 'nullable|string|max:255|unique:seriler,seri_kodu', // Validate seri_kodu for uniqueness
            'urun_aciklama' => 'nullable|string',
            'kategori_id' => 'required|integer|exists:kategoriler,kategori_ID',
            'marka_id' => 'required|integer|exists:markalar,marka_ID',
        ]);

        // Generate slug from seri_kodu (if provided)
        if (isset($seri['seri_kodu'])) {
            $seri['seri_kodu'] = Str::slug($seri['seri_kodu']);
        }

        // Create the new seri
        $yeniSeri = Seriler::create($seri);

        return back()->withSuccess('Seri başarıyla eklendi.');
    }*/
    public function EkleSeri(Request $request) {
        $seri = $request->validate([
            'urun_adi' => 'required|string|max:255',
            'seri_kodu' => 'nullable|string|max:255|unique:seriler,seri_kodu', // Validate seri_kodu for uniqueness
            'urun_aciklama' => 'nullable|string',
            'kategori_id' => 'required|integer|exists:kategoriler,kategori_ID',
            'marka_id' => 'required|integer|exists:markalar,marka_ID',
        ]);

        // Generate slug from seri_kodu (if provided)
        if (isset($seri['seri_kodu'])) {
            $seri['seri_kodu'] = Str::slug($seri['seri_kodu']);
        }

        // Check if seri_kodu is unique
        if (Seriler::where('seri_kodu', $seri['seri_kodu'])->exists()) {
            return back()->withFail('Seri kodu zaten mevcut. Farklı bir seri kodu deneyin.');
        }

        // Create the new seri
        $yeniSeri = Seriler::create($seri);

        return back()->withSuccess('Seri başarıyla eklendi.');
    }


    public function DuzenleSeri(Request $request, $id)
    {
        $seri = seriler::find($id);

        if ($request->seri_kodu) {
            $seri->seri_kodu = Str::slug($request->seri_kodu);
        } else {
            $seri->seri_kodu = Str::slug($request->urun_adi);
        }

        if ($request->seri_kodu) {
            $seri->seri_kodu = strtoupper($seri->seri_kodu);
        }

        $seri->urun_adi = $request->urun_adi;
        $seri->urun_aciklama = $request->urun_aciklama;
        $seri->kategori_id = $request->kategori_id;
        $seri->marka_id = $request->marka_id;

        $seri->save();

        return redirect()->route('fEkleSeri')->with('success', 'Seri güncellendi.');
    }

    public function SilSeri($id)
    {
        $veri = seriler::where('seri_ID', $id)->first();
        /*        dd($veri);*/

        if ($veri) {
            seriler::where('seri_ID', $id)->delete();
            return redirect()->route('fEkleSeri')->with('success', 'Seri silindi!');
        } else
            return redirect()->route('fEkleSeri')->with('fail', 'Seri silinemedi!');
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
