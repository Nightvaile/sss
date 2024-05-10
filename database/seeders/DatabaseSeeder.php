<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            KategorilerSeeder::class,
            MarkalarSeeder::class,
            RenklerSeeder::class,
            BedenlerSeeder::class,
            RollerSeeder::class,
            SeriSeeder::class,
            UserSeeder::class,
            SubelerSeeder::class,
            UrunlerSeeder::class,
            TedarikciSeeder::class,
            StoklarSeeder::class,
            StokHaraketleriSeeder::class,
        ]);
    }
}
