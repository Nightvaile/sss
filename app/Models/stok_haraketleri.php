<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stok_haraketleri extends Model
{
    use HasFactory;
    protected $table = 'stok_haraketleri';
    protected $primaryKey = 'stok_haraketi_ID';
    protected $fillable = [
        'urun_id',
        'teslim_alan',
        'tedarikci',
        'sube_id',
        'haraket_tipi',
        'stok_adeti',
        'birim_fiyat',
        'total_fiyat',
        'not',
    ];
}
