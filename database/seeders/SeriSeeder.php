<?php

namespace Database\Seeders;

use App\Models\seriler;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seriler = [
            [
                'seri_adi' =>'Kış',
            ],
            [
                'seri_adi' =>'Yaz',
            ],
            [
                'seri_adi' =>'Sonbahar',
            ],
            [
                'seri_adi' =>'İlkbahar',
            ],
        ];
        foreach ($seriler as $seri) {
            seriler::create($seri);
        }
    }
}
