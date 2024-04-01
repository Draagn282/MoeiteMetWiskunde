<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Call your seeders here
        $this->call([
            HoursSeeder::class,
            UserSeeder::class,
            // Add other seeders here if needed
        ]);
    }
}

