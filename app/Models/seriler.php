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
}
