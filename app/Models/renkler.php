<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class renkler extends Model
{
    use HasFactory;
    protected $table = 'renkler';
    protected $primaryKey = 'renk_ID';
    protected $fillable = [
        'renk_adi',
    ];
}
