<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kullanicilar = [
            [
                'tc_no' => '11111111111',
                'name' => 'Mehmet Harun',
                'surname' => 'Kaya',
                'tel_no' => '5111111111',
                'address' => 'Uşak',
                'rol_id' => '3',
                'email' => 'mharunky@gmail.com',
                'password' => '12345678',
            ],
            [
                'tc_no' => '22222222222',
                'name' => 'Ceyda',
                'surname' => 'Dayıcık',
                'tel_no' => '5222222222',
                'address' => 'Balıkesir',
                'rol_id' => '2',
                'email' => 'ceydadayicik@gmail.com',
                'password' => '87654321',
            ],
            [
                'tc_no' => '33333333333',
                'name' => 'Muhammet Enes',
                'surname' => 'Göçen',
                'tel_no' => '5333333333',
                'address' => 'Çanakkale',
                'email' => 'menesg@gmail.com',
                'password' => '17234568',
            ],
        ];

        foreach ($kullanicilar as $kullanici) {
            User::create($kullanici);
        }
    }
}
