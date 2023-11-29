<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
//        $users = User::query()
//            ->orderBy('name')
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        $users = User::query()
            ->when(request('sort') === 'town', function ($query) {
                $query->orderByRaw('town is null')
                    ->orderBY('town', request('direction'));
            })
            ->orderBy('name')
            ->paginate();

        return view('lesson-19.users', compact('users'));
    }
}
