<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class markalar extends Model
{
    use HasFactory;

    protected $table = 'markalar';
    protected $primaryKey = 'marka_ID';
    protected $fillable = [
        'marka_adi',
    ];
}
