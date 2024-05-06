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
                'stok' => '',
            ],*/
            [
                'urun_id' => '1',
                'sube_id' => '1',
                'stok' => '20',
            ],
            [
                'urun_id' => '1',
                'sube_id' => '2',
                'stok' => '40',
            ],
            [
                'urun_id' => '1',
                'sube_id' => '3',
                'stok' => '40',
            ],
            [
                'urun_id' => '2',
                'sube_id' => '3',
                'stok' => '200',
            ],
            [
                'urun_id' => '3',
                'sube_id' => '3',
                'stok' => '300',
            ],
            [
                'urun_id' => '4',
                'sube_id' => '3',
                'stok' => '400',
            ],
            [
                'urun_id' => '5',
                'sube_id' => '3',
                'stok' => '123',
            ],
        ];
        foreach ($stoklar as $stok) {
            stoklar::create($stok);
        }
    }
}
