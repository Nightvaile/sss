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
        'barkod_no',
        'sube_id',
        'stok_sayisi',
    ];
}
