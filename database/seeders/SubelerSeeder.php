<?php

namespace Database\Seeders;

use App\Models\subeler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubelerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subeler = [
            [
                'sube_adi' => '17 Burda',
                'adres' => 'Atatürk Cad.',
                'yetkili_kisi' => '1',
                'sube_tel' => '2861231234',
            ],
            [
                'sube_adi' => 'Troya Avm',
                'adres' => 'Troya Cad.',
                'yetkili_kisi' => '2',
                'sube_tel' => '2861231235',
            ],
            [
                'sube_adi' => 'Çanakkale Depo',
                'adres' => 'İskele',
                'yetkili_kisi' => '3',
                'sube_tel' => '2861231236',
            ],
        ];
        foreach ($subeler as $sube) {
            subeler::create($sube);
        }
    }
}
