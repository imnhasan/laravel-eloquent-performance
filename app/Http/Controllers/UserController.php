<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->orderBy('last_name')
            ->orderBy('first_name')
            ->paginate();

        return view('lesson-14.users', compact('users'));

    }
}
