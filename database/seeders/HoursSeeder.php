<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HoursSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define sample data for days
        $days = ['1_Monday', '2_Tuesday', '3_Wednesday', '4_Thursday', '5_Friday', '6_Saturday', '7_Sunday'];

        // Loop through each day
        foreach ($days as $index => $day) {
            // Loop from 11 AM to 5 PM
            for ($hour = 11; $hour <= 17; $hour++) {
                // Construct start and end times for the hour
                $start = Carbon::createFromTime($hour, 0);
                $end = $start->copy()->addHour();

                // Insert data for the hour
                DB::table('lesuren')->insert([
                    'dag' => $day,
                    'start_time' => $start->format('H:i:s'),
                    'end_time' => $end->format('H:i:s'),
                    'status' => 'niet mogelijk',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}