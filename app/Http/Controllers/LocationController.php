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
//            ->withinDistanceTo($myLocation, 10000) // 10km
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        $myLocation = [-79.47, 43.14];

        $locations = Location::query()
            ->selectDistanceTo($myLocation)
            ->withinDistanceTo($myLocation, 10000)
            ->orderByDistanceTo($myLocation)
            ->paginate();



        return view('lesson-26.locations', compact('locations'));
    }
}
