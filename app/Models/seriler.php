<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seriler extends Model
{
    use HasFactory;

    protected $table = 'seriler';
    protected $primaryKey = 'seri_ID';
    protected $fillable = [
        'urun_adi',
        'urun_aciklama',
        'kategori_id',
        'marka_id',
    ];
    public function marka()
    {
        return $this->belongsTo(markalar::class, 'marka_id','marka_ID');
    }
    public function kategori()
    {
        return $this->belongsTo(kategoriler::class, 'kategori_id','kategori_ID');
    }
}
