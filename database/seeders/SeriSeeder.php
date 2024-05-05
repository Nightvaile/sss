<?php

namespace Database\Seeders;

use App\Models\seriler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seriler = [
            [
//                'seri_kodu'=>,
                'urun_adi' => 'Kazak',
                'kategori_id' => '1',
                'marka_id'=>'1',

            ],
            [
//                'seri_kodu'=>,
                'urun_adi' => 'Tişört',
                'kategori_id' => '2',
                'marka_id'=>'2',

            ],
            [
//                'seri_kodu'=>,
                'urun_adi' => 'Pantalon',
                'kategori_id' => '3',
                'marka_id'=>'3',

            ],
            [
//                'seri_kodu'=>'adsaaaaa',
                'urun_adi' => 'Şort',
                'kategori_id' => '4',
                'marka_id'=>'4',

            ],
            [
//                'seri_kodu'=>,
                'urun_adi' => 'Şort',
                'kategori_id' => '4',
                'marka_id'=>'4',

            ],
            [
//                'seri_kodu'=>,
                'urun_adi' => 'Şort',
                'kategori_id' => '4',
                'marka_id'=>'4',

            ],
            [
//                'seri_kodu'=>,
                'urun_adi' => 'Şort',
                'kategori_id' => '4',
                'marka_id'=>'4',

            ],
        ];
        foreach ($seriler as $seri) {
            seriler::create($seri);
        }
    }
}
