<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roller extends Model
{
    use HasFactory;
    protected $table = 'roller';
    protected $fillable = [
        'rol_adi',
    ];
}
