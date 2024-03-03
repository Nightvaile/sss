<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class staffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        staff::create([
            'personelid' => '01234567890',
            'name' => 'Mehmet Harun',
            'surname' => 'Kaya',
            'username' => 'Nightvaile',
            'password' => '1234',
            'role' => 'admin',
            'status' => '1',
        ]);
    }
}
