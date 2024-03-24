<?php

namespace Database\Seeders;

use App\Models\kategoriler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $erkek = kategoriler::create([
            'kategori_ID' => '1',
            'kategori_adi' => 'Erkek',
        ]);
        $kadin = kategoriler::create([
            'kategori_ID' => '2',
            'kategori_adi' => 'Kadın',
        ]);
        /*
            $erkek_cocuk = kategoriler::create([
            'kategori_ID'=>'3',
            'kategori_adi' => 'Erkek Çocuk',
        ]);
        $kiz_cocuk = kategoriler::create([
            'kategori_ID'=>'4',
            'kategori_adi' => 'Kız Çocuk',
        ]);
        */
        $cocuk = kategoriler::create([
            'kategori_ID' => '3',
            'kategori_adi' => 'Çocuk',
        ]);
        $kategoriler = [
            [
                'kategori_adi' => 'Giyim',
                'ust_kategori' => $erkek->kategori_ID,
            ],
            [
                'kategori_adi' => 'Ayakkabı',
                'ust_kategori' => $kadin->kategori_ID,
            ],
            [
                'kategori_adi' => 'Erkek Çocuk',
                'ust_kategori' => $cocuk->kategori_ID,
            ],
            [
                'kategori_adi' => 'Kız Çocuk',
                'ust_kategori' => $cocuk->kategori_ID,
            ],
        ];

        foreach ($kategoriler as $kategori) {
            kategoriler::create($kategori);
        }
    }
}
