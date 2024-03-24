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
                'gondereci' => '',
                'alici' => '',
                'stok_adeti' => '',
                'birim_fiyat' => '',
                'total_fiyat' => '',
            ],*/
            [
                'barkod_no' => '868111000003',
                'personel_id' => '3',
                'gondereci' => '3',
                'alici' => '1',
                'stok_adeti' => '100',
                'birim_fiyat' => 100,
                'total_fiyat' => 10000,
            ],
            [
                'barkod_no' => '868111000002',
                'personel_id' => '3',
                'gondereci' => '3',
                'alici' => '2',
                'stok_adeti' => '200',
                'birim_fiyat' => 100,
                'total_fiyat' => 20000,
            ],
        ];
        foreach ($haraketler as $haraket) {
            stok_haraketleri::create($haraket);
        }
    }
}
