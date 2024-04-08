<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roller extends Model
{
    use HasFactory;

    protected $table = 'roller';
    protected $primaryKey = 'rol_ID';//Tanımlarken gelen temel şeyleri değiştirdiğinde tanıtman gerekiyor.
    protected $fillable = [
        'rol_adi',
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'rol_id');
    }
}
