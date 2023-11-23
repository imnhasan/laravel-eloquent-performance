<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index()
    {
//        Auth::login(User::where('name', 'Cat Seller')->first());
//        $customers = Customer::query()
//            ->with('salesRep')
//            ->OrderBy('name')
//            ->paginate();
//        --------------------------------------------------------------------------------------------------------------

//        Auth::login(User::where('name', 'Cat Seller')->first());
//        $customers = Customer::query()
//            ->with('salesRep')
//            ->OrderBy('name')
//            ->get()
//            ->filter(function ($customer) {
//               return Auth::user()->can('view', $customer);
//            });
//        --------------------------------------------------------------------------------------------------------------

//        Auth::login(User::where('name', 'Cat Seller')->first());
//        $customers = Customer::query()
//            ->with('salesRep')
//            ->visibleTo(Auth::user())
//            ->OrderBy('name')
//            ->paginate();
//        --------------------------------------------------------------------------------------------------------------

        Auth::login(User::where('name', 'Pet Boss')->first());
        $customers = Customer::query()
            ->with('salesRep')
            ->visibleTo(Auth::user())
            ->OrderBy('name')
            ->paginate();

        return view('lesson-13.customers', compact('customers'));
    }
}
