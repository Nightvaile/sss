<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subeler extends Model
{
    use HasFactory;
    protected $table = 'subeler';
    protected $primaryKey = 'sube_ID';
    protected $fillable = [
        'barkod_no',
        'sube_id',
        'stok_sayisi',
    ];
}
