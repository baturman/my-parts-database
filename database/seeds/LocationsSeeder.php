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
        $location->description = "Medium Double Sided Organizer (Blue)";

        $location
            ->addMedia(storage_path('demo/locations/SB-22-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "SB-22-ORNG-01";
        $location->description = "Medium Double Sided Organizer (Orange)";

        $location
            ->addMedia(storage_path('demo/locations/SB-22-ORNG.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "SB-10-YLLW-01";
        $location->description = "Small Double Sided Organizer (Yellow)";

        $location
            ->addMedia(storage_path('demo/locations/SB-10-YLLW.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "SB-10-BLCK-01";
        $location->description = "Small Double Sided Organizer (Black)";

        $location
            ->addMedia(storage_path('demo/locations/SB-10-BLCK.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "MO-13-TRAN-01";
        $location->description = "Transparent Organizer (13\")";

        $location
            ->addMedia(storage_path('demo/locations/MO-13-TRAN.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "MO-09-TRAN-01";
        $location->description = "Transparent Organizer (9\")";

        $location
            ->addMedia(storage_path('demo/locations/MO-09-TRAN.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "MO-09-TRAN-02";
        $location->description = "Transparent Organizer (9\")";

        $location
            ->addMedia(storage_path('demo/locations/MO-09-TRAN.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "MT-07-GREN-01";
        $location->description = "Mano Green Toolbox & Organizer (7\")";

        $location
            ->addMedia(storage_path('demo/locations/MT-07-GREN.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "MT-11-GREN-01";
        $location->description = "Mano Green Toolbox & Organizer (11\")";

        $location
            ->addMedia(storage_path('demo/locations/MT-11-GREN.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();


        $location = new Location();
        $location->name = "HB-00-BLUE-01";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-02";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-03";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-04";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-05";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-06";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-07";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-08";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-09";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-10";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-11";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-12";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();


        $location = new Location();
        $location->name = "HB-00-BLUE-13";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();


        $location = new Location();
        $location->name = "HB-00-BLUE-14";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-15";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "HB-00-BLUE-16";
        $location->description = "Blue Plastic Drawer";

        $location
            ->addMedia(storage_path('demo/locations/HB-00-BLUE.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();


        $location = new Location();
        $location->name = "AC-08-ACRY-01";
        $location->description = "Small Acrylic Box (8\")";

        $location
            ->addMedia(storage_path('demo/locations/AC-08-ACRY.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "AC-08-ACRY-02";
        $location->description = "Small Acrylic Box (8\")";

        $location
            ->addMedia(storage_path('demo/locations/AC-08-ACRY.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "AC-13-ACRY-01";
        $location->description = "Medium Acrylic Box (13\")";

        $location
            ->addMedia(storage_path('demo/locations/AC-13-ACRY.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "AC-13-ACRY-02";
        $location->description = "Medium Acrylic Box (13\")";

        $location
            ->addMedia(storage_path('demo/locations/AC-13-ACRY.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "CB-00-RBTS-01";
        $location->description = "Cartoon Box (Robotistan)";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "CB-00-RBTS-02";
        $location->description = "Cartoon Box (Robotistan)";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "CB-00-RBTS-02";
        $location->description = "Cartoon Box (Robotistan)";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

    }
}
