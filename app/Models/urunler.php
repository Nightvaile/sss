<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urunler extends Model
{
    use HasFactory;
    protected $table = 'urunler';
    protected $fillable = [
        'urun_adi',
        'aciklama',
        'fiyat',
        'adet',
        'min_adet_bildirimi',
        'seri_id',
        'kategori_id',
        'marka_id',
        'renk_id',
        'beden_id',
    ];
}
