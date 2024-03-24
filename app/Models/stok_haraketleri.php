<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok_haraketleri extends Model
{
    use HasFactory;
    protected $table = 'stok_haraketleri';
    protected $fillable = [
        'barkod_no',
        'personel_id',
        'gondereci',
        'alici',
        'haraket_tipi',
        'stok_adeti',
        'birim_fiyat',
        'total_fiyat',
    ];
}
