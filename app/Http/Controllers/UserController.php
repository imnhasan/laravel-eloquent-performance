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
//            ->lastLoginAt()
//            ->lastLoginIpAddress()
//            ->orderBy('name')
//            ->paginate();

        // Move to dynamic relation
        $users = User::query()
            ->lastLogin()
            ->orderBy('name')
            ->paginate();


        return view('lesson-04.users', compact('users'));
    }
}
