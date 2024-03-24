<?php

namespace Database\Seeders;

use App\Models\markalar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarkalarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $markalar = [
            [
                'marka_adi' =>'Nike',
            ],
            [
                'marka_adi' =>'Bershka',
            ],
            [
                'marka_adi' =>'Adidas',
            ],
            [
                'marka_adi' =>'Defacto',
            ],
            [
                'marka_adi' =>'Zara',
            ],
            [
                'marka_adi'=>'Rolex',
            ],
            [
                'marka_adi'=>'Mavi',
            ],
        ];
        foreach ($markalar as $marka) {
            markalar::create($marka);
        }
    }
}
