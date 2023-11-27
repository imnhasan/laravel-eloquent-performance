<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

//        $users = User::query()
//            ->orderBy('name')
//            ->lastLogin()
//            ->paginate();
//        --------------------------------------------------------------------------------------------------------------

//        $users = User::query()
//            ->select('users.*')
//            ->join('logins', 'logins.user_id', '=', 'users.id')
//            ->orderByDesc('logins.created_at')
//            ->lastLogin()
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

//        $users = User::query()
//            ->select('users.*')
//            ->join('logins', 'logins.user_id', '=', 'users.id')
//            ->orderByDesc('logins.created_at')
//            ->groupBy('users.id')
//            ->lastLogin()
//            ->paginate();


//        --------------------------------------------------------------------------------------------------------------

//        $users = User::query()
//            ->select('users.*')
//            ->join('logins', 'logins.user_id', '=', 'users.id')
//            ->orderByRaw('max(logins.created_at) desc')
//            ->groupBy('users.id')
//            ->lastLogin()
//            ->paginate();


//        --------------------------------------------------------------------------------------------------------------

//        $users = User::query()
//            ->orderByDesc(Login::select('created_at')
//                ->whereColumn('user_id', 'users.id')
//                ->latest()
//                ->take(1)
//            )
//            ->lastLogin()
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        // Sub query move to scope
        $users = User::query()
            ->orderByLastLogin()
            ->lastLogin()
            ->paginate();

//        --------------------------------------------------------------------------------------------------------------
        return view('lesson-17.users', compact('users'));
    }
}
