<?php

namespace Database\Seeders;

use App\Models\tedarikciler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TedarikciSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tedarikciler = [
            [
                'firma_adi' => 'Kaya Boya',
                'firma_tel' => '02121231234',
                'yetkili_kisi' => 'Kerem Kaya',
                'yetkili_tel' => '05555555555',
                'adres' => 'İstanbul',
                'email' => 'kyby@gmail.com',
            ],
            [
                'firma_adi' => 'Göçen Tekstil',
                'firma_tel' => '02121231235',
                'yetkili_kisi' => 'Fuat Göçen',
                'yetkili_tel' => '05556666666',
                'adres' => 'Çanakkale',
                'email' => 'fgtxl@gmail.com',
            ],
            [
                'firma_adi' => 'Dayıcık Moda',
                'firma_tel' => '02121231236',
                'yetkili_kisi' => 'Aslı Dayıcık',
                'yetkili_tel' => '05557777777',
                'adres' => 'Balıkesir',
                'email' => 'dyckmd@gmail.com',
            ],
        ];

        foreach ($tedarikciler as $tedarikci) {
            tedarikciler::create($tedarikci);
        }
    }
}
