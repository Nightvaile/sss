<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urunler extends Model
{
    use HasFactory;
    protected $table = 'urunler';
    protected $primaryKey = 'barcode_NO';
    protected $fillable = [
        'seri_id',
        'fiyat',
        'adet',
        'min_adet_bildirimi',
        'renk_id',
        'beden_id',
    ];
}
