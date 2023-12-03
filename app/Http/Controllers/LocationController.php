<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
//        $locations = Location::query()
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        $myLocation = [-79.47, 43.14];

        $locations = Location::query()
            ->selectDistanceTo($myLocation)
            ->paginate();


        return view('lesson-24.locations', compact('locations'));
    }
}
