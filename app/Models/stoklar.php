<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stoklar extends Model
{
    use HasFactory;

    protected $table = 'stoklar';
    protected $primaryKey = 'stok_ID';
    protected $fillable = [
        'urun_id',
        'sube_id',
        'satis_fiyati',
        'stok',
        'stok_bildirimi',
    ];

    public function urun()
    {
        return $this->belongsTo(urunler::class, 'urun_id', 'urun_ID');
    }

    public function sube()
    {
        return $this->belongsTo(subeler::class, 'sube_id', 'sube_ID');
    }
}
