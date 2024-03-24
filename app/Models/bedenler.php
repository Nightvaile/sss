<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bedenler extends Model
{
    use HasFactory;

    protected $table = 'bedenler';
    protected $fillable = [
        'beden_adi',
    ];
}
