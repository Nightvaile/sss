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
                'urun_adi' => 'Kazak',
                'kategori_id' => '1',
                'marka_id'=>'1',

            ],
            [
                'urun_adi' => 'Tişört',
                'kategori_id' => '2',
                'marka_id'=>'2',

            ],
            [
                'urun_adi' => 'Pantalon',
                'kategori_id' => '3',
                'marka_id'=>'3',

            ],
            [
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
