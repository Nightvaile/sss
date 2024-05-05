<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urunler extends Model
{
    use HasFactory;
    protected $table = 'urunler';
    protected $primaryKey = 'urun_ID';
    protected $fillable = [
        'barkod_NO',
        'seri_id',
        'fiyat',
        'adet',
        'min_adet_bildirimi',
        'renk_id',
        'beden_id',
    ];
    public function beden()
    {
        return $this->belongsTo(bedenler::class, 'beden_id','beden_ID');
    }
    public function renk()
    {
        return $this->belongsTo(renkler::class, 'renk_id','renk_ID');
    }
    public function seri()
    {
        return $this->belongsTo(seriler::class, 'seri_id','seri_ID');
    }
}
