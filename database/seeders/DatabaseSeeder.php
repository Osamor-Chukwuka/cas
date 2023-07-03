<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cafetaria;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $resturants = ['Davta', 'ETC', 'Ultimate'];
        foreach($resturants as $resturant){
            Cafetaria::factory()->create([
                'name' => $resturant
            ]);
        }
        // \App\Models\User::factory(10)->create();
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
