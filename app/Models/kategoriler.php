<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriler extends Model
{
    use HasFactory;
    protected $table = 'kategoriler';
    protected $primaryKey = 'kategori_ID';
    protected $fillable = [
        'kategori_adi',
        'ust_kategori',
    ];
    public function ustKategori()
    {
        return $this->belongsTo(kategoriler::class, 'ust_kategori', 'kategori_ID');
    }
}
