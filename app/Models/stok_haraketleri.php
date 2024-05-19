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
        'tedarikci_id',
        'sube_id',
        'haraket_tipi',
        'stok_adeti',
        'birim_fiyat',
        'total_fiyat',
        'not',
    ];

    public function urun()
    {
        return $this->belongsTo(urunler::class, 'urun_id', 'urun_ID');
    }

    public function sube()
    {
        return $this->belongsTo(subeler::class, 'sube_id', 'sube_ID');
    }

    public function tedarikci()
    {
        return $this->belongsTo(tedarikciler::class, 'tedarikci_id', 'tedarikci_ID');
    }

    public function kullanici()
    {
        return $this->belongsTo(User::class, 'teslim_alan', 'id');
    }
}
