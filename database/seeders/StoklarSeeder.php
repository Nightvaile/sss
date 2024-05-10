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
                'urun_id' => '',
                'sube_id' => '',
                'satis_fiyati' => '123',
                'stok' => '',
            ],*/
            [
                'urun_id' => '1',
                'sube_id' => '1',
                'satis_fiyati' => '1232',
                'stok' => '20',
            ],
            [
                'urun_id' => '1',
                'sube_id' => '2',
                'satis_fiyati' => '1233',
                'stok' => '40',
            ],
            [
                'urun_id' => '1',
                'sube_id' => '3',
                'satis_fiyati' => '1234',
                'stok' => '40',
            ],
            [
                'urun_id' => '2',
                'sube_id' => '3',
                'satis_fiyati' => '1231',
                'stok' => '200',
            ],
            [
                'urun_id' => '3',
                'sube_id' => '3',
                'satis_fiyati' => '1235',
                'stok' => '300',
            ],
            [
                'urun_id' => '4',
                'sube_id' => '3',
                'satis_fiyati' => '12312',
                'stok' => '400',
            ],
            [
                'urun_id' => '5',
                'sube_id' => '3',
                'satis_fiyati' => '123',
                'stok' => '123',
            ],
        ];
        foreach ($stoklar as $stok) {
            stoklar::create($stok);
        }
    }
}
