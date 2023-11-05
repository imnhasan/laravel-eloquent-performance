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
            ->orderBy('name')
            ->simplePaginate();

        return view('lesson-01.users', compact('users'));
    }
}
