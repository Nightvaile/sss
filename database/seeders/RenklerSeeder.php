<?php

namespace Database\Seeders;

use App\Models\renkler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RenklerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $renkler = [
            [
                'renk_adi' => 'Sarı',
            ],
            [
                'renk_adi' => 'Mavi',
            ],
            [
                'renk_adi' => 'Lacivert',
            ],
            [
                'renk_adi' => 'Kırmızı',
            ],
            [
                'renk_adi' => 'Turkuaz',
            ],
            [
                'renk_adi' => 'Yeşil',
            ],
            [
                'renk_adi' => 'Siyah',
            ],
            [
                'renk_adi' => 'Beyaz',
            ],
        ];
        foreach ($renkler as $renk) {
            renkler::create($renk);
        }
    }
}
