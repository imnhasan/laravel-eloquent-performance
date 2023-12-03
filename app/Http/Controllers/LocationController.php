<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {

//        $myLocation = [-79.47, 43.14];
//
//        $locations = Location::query()
//            ->selectDistanceTo($myLocation)
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        $myLocation = [-79.47, 43.14];

        $locations = Location::query()
            ->selectDistanceTo($myLocation)
            ->withinDistanceTo($myLocation, 10000) // 10km
            ->paginate();



        return view('lesson-25.locations', compact('locations'));
    }
}
