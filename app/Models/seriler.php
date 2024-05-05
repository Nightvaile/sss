<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class seriler extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table = 'seriler';
    protected $primaryKey = 'seri_ID';
    protected $fillable = [
        'urun_adi',
        'seri_kodu',
        'urun_aciklama',
        'kategori_id',
        'marka_id',
    ];
    public function sluggable(): array
    {
        return [
            'seri_kodu' => [ // Use 'slug' as the column name for consistency
                'source' => ['urun_adi', 'seri_ID'], // Combine source fields for richer slugs
                'uppercase' => true, // Convert slug to uppercase
                'separator' => '-',  // Optional: Use a hyphen for better readability
                'unique' => true,   // Ensure unique slugs (consider adding a random string if conflicts arise)
                'method' => function ($string, $separator) {
                    return strtoupper(Str::slug($string, $separator));}
            ],
        ];
    }
    public function marka()
    {
        return $this->belongsTo(markalar::class, 'marka_id','marka_ID');
    }
    public function kategori()
    {
        return $this->belongsTo(kategoriler::class, 'kategori_id','kategori_ID');
    }
}
