<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define sample data for days
        $days = ['Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag', 'Zondag'];

        // Loop through each day
        foreach ($days as $index => $day) {
            // Loop from 11 AM to 5 PM
            for ($hour = 11; $hour <= 17; $hour++) {
                // Construct start and end times for the hour
                $start = Carbon::createFromTime($hour, 0);
                $end = $start->copy()->addHour();

                // Insert data for the hour
                DB::table('Lesuren')->insert([
                    'Dag' => $index + 1,
                    'StartUurVanDag' => $start,
                    'EindUurVanDag' => $end,
                    'Status' => 0,
                ]);
            }
        }
    }
}
