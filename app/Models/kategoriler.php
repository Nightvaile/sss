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
}
