<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
//        $devices = Device::query()
//            ->orderByRaw('name')
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

//        $devices = ['iPhone 3',  'iPhone 11'];
//        sort($devices, SORT_NATURAL);
//        return $devices;

//        --------------------------------------------------------------------------------------------------------------

        $devices = Device::query()
            ->orderByRaw('naturalsort(name)')
            ->paginate();


//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------

        return view('lesson-22.devices', compact('devices'));
    }
}
