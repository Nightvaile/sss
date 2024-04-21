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
        'sube_adi',
        'adres',
        'yetkili_kisi',
        'sube_tel'
    ];

    public function yetkili()
    {
        return $this->hasOne(User::class, 'id', 'yetkili_kisi');
    }
}
