<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Too much model load here ------------------------------------------------------------------------------------
//        $users = User::query()
//            ->with('logins')
//            ->orderBy('name')
//            ->paginate();

        // Modify the sql to reduce the model --------------------------------------------------------------------------
//        $users = User::query()
//            ->addSelect(['last_login_at' => Login::query()
//                ->select('created_at')
//                ->whereColumn('user_id', 'users.id')
//                ->latest()
//                ->take(1)
//            ])
//            ->withCasts(['last_login_at' => 'datetime'])
//            ->orderBy('name')
//            ->paginate();

        // Move to scope -----------------------------------------------------------------------------------------------
        $users = User::query()
            ->lastLoginAt()
            ->orderBy('name')
            ->paginate();

        return view('lesson-03.users', compact('users'));
    }
}
