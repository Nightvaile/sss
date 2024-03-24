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
                'urun_adi' => 'Triko Kazak',
                'aciklama' => 'Kışlık Kazak',
                'fiyat' => 1111.11,
                'adet' => '100',
                'seri_id' => '1',
                'kategori_id' => '1',
                'marka_id' => '1',
                'renk_id' => '1',
                'beden_id' => '1',
            ],
            [
                'urun_adi' => 'Triko Kazak',
                'aciklama' => 'Kışlık Kazak',
                'fiyat' => 222.22,
                'adet' => '200',
                'seri_id' => '2',
                'kategori_id' => '2',
                'marka_id' => '2',
                'renk_id' => '2',
                'beden_id' => '2',
            ],
            [
                'urun_adi' => 'Triko Kazak',
                'aciklama' => 'Kışlık Kazak',
                'fiyat' => 333.33,
                'adet' => '300',
                'seri_id' => '3',
                'kategori_id' => '3',
                'marka_id' => '3',
                'renk_id' => '3',
                'beden_id' => '3',
            ],
            [
                'urun_adi' => 'Triko Kazak',
                'aciklama' => 'Kışlık Kazak',
                'fiyat' => 444.44,
                'adet' => '400',
                'seri_id' => '4',
                'kategori_id' => '4',
                'marka_id' => '4',
                'renk_id' => '4',
                'beden_id' => '4',
            ],
            [
                'urun_adi' => 'Triko Kazak',
                'aciklama' => 'Kışlık Kazak',
                'fiyat' => 1234.99,
                'adet' => '123',
                'seri_id' => '1',
                'kategori_id' => '2',
                'marka_id' => '3',
                'renk_id' => '4',
                'beden_id' => '5',
            ],

        ];

        foreach ($urunler as $urun) {
            urunler::create($urun);
        }
    }
}
