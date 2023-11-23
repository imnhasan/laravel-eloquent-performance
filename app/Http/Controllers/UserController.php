<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->with('company')
            ->search(request('search'))
            ->paginate();

        return view('lesson-08.users', compact('users'));
    }
}
