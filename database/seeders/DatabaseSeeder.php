<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cafetaria;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Cafetaria seeder
        $resturants = ['Davta', 'ETC', 'Ultimate'];
        foreach ($resturants as $resturant) {
            Cafetaria::factory()->create([
                'name' => $resturant
            ]);
        }

        // User seeder
        $passwords = ['Davta123', 'ETC123', 'Ultmiate123'];
        $name = ['Davta', 'ETC', 'Ultmiate'];
        $emaill = ['davta@gmail.com', 'etc@gmail.com', 'ultmiate@gmail.com'];
        for ($i = 0; $i <= 2; $i++) {
            User::factory()->create([
                'name' => $name[$i],
                'email' => $emaill[$i],
                'password' => $passwords[$i]
            ]);
        }


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
