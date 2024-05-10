<?php

namespace Database\Seeders;

use App\Models\stok_haraketleri;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StokHaraketleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $haraketler = [
            /*[
                'barkod_no' => '',
                'personel_id' => '',
                'tedarikci' => '',
                'teslim_alan' => '',
                'stok_adeti' => '',
                'birim_fiyat' => '',
                'total_fiyat' => '',
            ],*/
            [
                'urun_id' => '1',
//                'haraket_tipi'=>'1',
                'teslim_alan' => '3',
                'tedarikci' => '3',
                'sube_id'=>'1',
                'stok_adeti' => '100',
                'birim_fiyat' => 100,
                'total_fiyat' => 10000,
                'not'=>'sonbahar koleksiyonu',
            ],
            [
                'urun_id' => '2',
                'teslim_alan' => '2',
                'tedarikci' => '2',
                'sube_id'=>'1',
                'haraket_tipi'=>'Alış',
                'stok_adeti' => '200',
                'birim_fiyat' => 100,
                'total_fiyat' => 20000,
                'not'=>'sonbahar koleksiyonu',
            ],
            [
                'urun_id'=>'1',
                'teslim_alan'=>'1',
                'tedarikci'=>'1',
                'sube_id'=>'1',
//                'haraket_tipi'=>'Satış',
                'stok_adeti'=>'200',
                'birim_fiyat'=>100,
                'total_fiyat'=>20000,
                'not'=>'sonbahar koleksiyonu',
            ]
        ];
        foreach ($haraketler as $haraket) {
            stok_haraketleri::create($haraket);
        }
    }
}
