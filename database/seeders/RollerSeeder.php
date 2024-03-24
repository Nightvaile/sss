<?php

namespace Database\Seeders;

use App\Models\roller;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RollerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roller = [
            [
                'rol_adi' =>'Personel',
            ],
            [
                'rol_adi' =>'Depo Yöneticisi',
            ],
            [
                'rol_adi' =>'Üst Düzey Yönetici',
            ],

        ];
        foreach ($roller as $rol) {
            roller::create($rol);
        }
    }
}
