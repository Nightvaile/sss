<?php

namespace Database\Seeders;

use App\Models\urunler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UrunlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $urunler = [
            /*[
                'urun_adi' => '',
                'aciklama' => '',
                'kategori_id' => '',
                'marka_id' => '',
                'renk_id' => '',
                'beden_id' => '',
            ],*/
            [
                'barkod_NO' => '8610546461',
                'seri_id' => '1',
                'renk_id' => '1',
                'beden_id' => '1',
            ],
            [
                'barkod_NO' => '8610546462',
                'seri_id' => '2',
                'renk_id' => '2',
                'beden_id' => '2',
            ],
            [
                'barkod_NO' => '8610546463',
                'seri_id' => '3',
                'renk_id' => '3',
                'beden_id' => '3',
            ],
            [
                'barkod_NO' => '8610546464',
                'seri_id' => '4',
                'renk_id' => '4',
                'beden_id' => '4',
            ],
            [
                'barkod_NO' => '8610546465',
                'seri_id' => '1',
                'renk_id' => '4',
                'beden_id' => '5',
            ],

        ];

        foreach ($urunler as $urun) {
            urunler::create($urun);
        }
    }
}
