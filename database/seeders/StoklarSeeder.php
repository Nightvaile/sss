<?php

namespace Database\Seeders;

use App\Models\stoklar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoklarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stoklar = [
            /*[
                'barkod_no' => '',
                'sube_id' => '',
                'stok_sayisi' => '',
            ],*/
            [
                'barkod_no' => '868111000000',
                'sube_id' => '1',
                'stok_sayisi' => '20',
            ],
            [
                'barkod_no' => '868111000000',
                'sube_id' => '2',
                'stok_sayisi' => '40',
            ],
            [
                'barkod_no' => '868111000000',
                'sube_id' => '3',
                'stok_sayisi' => '40',
            ],
            [
                'barkod_no' => '868111000001',
                'sube_id' => '3',
                'stok_sayisi' => '200',
            ],
            [
                'barkod_no' => '868111000002',
                'sube_id' => '3',
                'stok_sayisi' => '300',
            ],
            [
                'barkod_no' => '868111000003',
                'sube_id' => '3',
                'stok_sayisi' => '400',
            ],
            [
                'barkod_no' => '868111000004',
                'sube_id' => '3',
                'stok_sayisi' => '123',
            ],
        ];
        foreach ($stoklar as $stok) {
            stoklar::create($stok);
        }
    }
}
