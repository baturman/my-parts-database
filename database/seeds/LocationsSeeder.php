<?php

use App\Location;
use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $location = new Location();
        $location->name = "SB-22-BLUE-01";
        $location->description = "Double Sided Organizer (Blue - 22\")";

        $location
            ->addMedia(storage_path('demo/locations/SB-22-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');
    }
}
