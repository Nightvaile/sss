<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seriler extends Model
{
    use HasFactory;
    protected $table = 'seriler';
    protected $fillable = [
        'seri_adi',
    ];
}
