<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Seeder;
use Prophecy\Call\Call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            InformationSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
