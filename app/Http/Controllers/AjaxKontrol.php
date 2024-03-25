<?php

namespace App\Http\Controllers;

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
}
