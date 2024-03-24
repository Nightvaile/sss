<?php

namespace Database\Seeders;

use App\Models\bedenler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BedenlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bedenler = [
            [
                'beden_adi' => 'S',
            ],
            [
                'beden_adi' => 'M',
            ],
            [
                'beden_adi' => 'L',
            ],
            [
                'beden_adi' => '43',
            ],
            [
                'beden_adi' => '44',
            ],
            [
                'beden_adi' => '33/34',
            ],
            [
                'beden_adi' => '34/34',
            ],
        ];
        foreach ($bedenler as $beden) {
            bedenler::create($beden);
        }
    }
}
