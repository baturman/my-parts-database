<?php

namespace App\Http\Controllers;

use App\Location;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Validation\ValidationException;

class LocationController extends Controller
{
    public function index(){
        $locations = Location::orderBy('name', 'asc')->get();
        return view('backend.locations')
            ->with('locations', $locations);
    }

    public function edit($id){
        $location = Location::findOrFail($id);
        return view('backend.locations_edit')
            ->with('location', $location);

    }

    /**
     * @param Request $request
     * @param $id
     * @return RedirectResponse|Redirector
     * @throws ValidationException
     */
    public function update(Request $request, $id){
        $location = Location::findOrFail($id);

        $this->validate($request, [
            'name' => 'required|min:4|max:55',
            'description' => 'required|min:10|max:80'
        ]);

        try{
            $data = $request->only($location->getFillable());
            $location->fill($data);
            $location->save();

            if ($request->exists('image')){
                $image = $request->file('image');
                $location
                    ->addMediaFromRequest('image')
                    ->setFileName('image.' . $image->extension())
                    ->toMediaCollection('images');
            }

            return redirect(route('locations.edit', [$location->id]))->with('success', 'Location saved successfully.');
        }catch (Exception $exception){
            Log::error("Exception occurred while saving part. Exception: \n" . $exception);
            return redirect(route('locations.edit', [$location->id]))->with('error', $exception->getMessage());
        }
    }

    public function store(){

        /*
        $location = new Location();
        $location->name = "DG-00-ZGBE-BX";
        $location->description = "Digi Zigbee Mesh Kit Box";

        $location
            ->addMedia(storage_path('demo/locations/ZIGBEE_BOX.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "CB-00-CYAN-BX";
        $location->description = "Roboweb Box";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "CB-MD-ORNG-BX";
        $location->description = "Robocombo Box (Medium)";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "CB-SM-ORNG-BX";
        $location->description = "Robocombo Box (Small)";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "CB-SM-REDD-BX";
        $location->description = "F1 Depo Box (Small)";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "CB-MD-NAVY-01";
        $location->description = "Robotistan (Medium)";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

        $location = new Location();
        $location->name = "CB-MD-NAVY-02";
        $location->description = "Robotistan (Medium)";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "CB-SM-NOCL-01";
        $location->description = "Motorobit (Small)";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "CB-XL-NAVY-01";
        $location->description = "DC Power Supply Box";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "CB-XL-NAVY-01";
        $location->description = "DC Power Supply Box";

        $location
            ->addMedia(storage_path('demo/locations/RXN-305.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "CB-LG-NOCL-01";
        $location->description = "Robot Kutusu";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "DR-00-WHTE-01";
        $location->description = "White Drawer - 01";

        $location
            ->addMedia(storage_path('demo/locations/drawer.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "CB-LG-NOCL-02";
        $location->description = "Robotistan (No Color)";

        $location
            ->addMedia(storage_path('demo/locations/drawer.png'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "CB-LG-ORNG-BX";
        $location->description = "Robocombo Box (Large)";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "CB-LG-NOCL-02";
        $location->description = "Robot Kutusu";

        $location
            ->addMedia(storage_path('demo/locations/CB-00-NOCL.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "BB-LG-BLCK-01";
        $location->description = "Black Box";

        $location
            ->addMedia(storage_path('demo/locations/black-box.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();

                $location = new Location();
        $location->name = "RT-MD-NAVY-01";
        $location->description = "Robotistan Navy Medium";

        $location
            ->addMedia(storage_path('demo/locations/robotistan-navy-medium.jpg'))
            ->preservingOriginal()
            ->toMediaCollection('images');

        $location->save();
        */





    }
}
