<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Plat;
use App\Models\restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        for ($i = 1; $i <= 200 ; $i++) {
        	 Plat::create([
                 'name' => 'plat'.$i,
                 'price' => rand(1000,15000),
                 'image' => 'plat.jpg',
                 'restaurant_id' => Restaurant::all()->random()->id,
        	 ]);
        }
    }
}
