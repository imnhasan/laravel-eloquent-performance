<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $locations = array_map('str_getcsv', file(__DIR__ . '/locations.csv'));

        collect($locations)->each(function ($location) {
            Location::create([
                'address' => $location[0],
                'city' => $location[1],
                'state' => $location[2],
                'postal' => $location[3],
                'location' => DB::raw('ST_SRID(Point(' . $location[4] . ',' . $location[5] . '), 4326)'),

            ]);
        });
    }
}
