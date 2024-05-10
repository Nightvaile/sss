<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tedarikci extends Model
{
    use HasFactory;

    protected $table = 'tedarikciler';
    protected $primaryKey = 'tedarikci_ID';
    protected $fillable = [
        'tedarikci_ID',
        'firma_adi',
        'firma_tel',
        'yetkili_kisi',
        'yetkili_tel',
        'adres',
        'email',
        'odeme_bilgileri',
    ];
}
