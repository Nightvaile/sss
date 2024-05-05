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
                'fiyat' => '',
                'adet' => '',
                'seri_id' => '',
                'kategori_id' => '',
                'marka_id' => '',
                'renk_id' => '',
                'beden_id' => '',
            ],*/
            [
                'barkod_NO'=>'8610546461',
                'seri_id' => '1',
                'fiyat' => 1111.11,
                'adet' => '100',
                'renk_id' => '1',
                'beden_id' => '1',
            ],
            [
                'barkod_NO'=>'8610546462',
                'seri_id' => '2',
                'fiyat' => 222.22,
                'adet' => '200',
                'renk_id' => '2',
                'beden_id' => '2',
            ],
            [
                'barkod_NO'=>'8610546463',
                'seri_id' => '3',
                'fiyat' => 333.33,
                'adet' => '300',
                'renk_id' => '3',
                'beden_id' => '3',
            ],
            [
                'barkod_NO'=>'8610546464',
                'seri_id' => '4',
                'fiyat' => 444.44,
                'adet' => '400',
                'renk_id' => '4',
                'beden_id' => '4',
            ],
            [
                'barkod_NO'=>'8610546465',
                'seri_id' => '1',
                'fiyat' => 1234.99,
                'adet' => '123',
                'renk_id' => '4',
                'beden_id' => '5',
            ],

        ];

        foreach ($urunler as $urun) {
            urunler::create($urun);
        }
    }
}
