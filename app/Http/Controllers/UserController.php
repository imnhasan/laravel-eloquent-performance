<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\select;

class UserController extends Controller
{
    public function index()
    {
//        $users = User::query()
//            ->orderBy('name')
//            ->with('company')
//            ->paginate();
//        --------------------------------------------------------------------------------------------------------------

//        $users = User::query()
//            ->select('users.*')
//            ->join('companies', 'companies.user_id', 'users.id')
//            ->orderBy('companies.name')
//            ->with('company')
//            ->paginate();
//        --------------------------------------------------------------------------------------------------------------

        $users = User::query()
            ->orderBy(Company::select('name')
                ->whereColumn('id', 'users.company_id')
                ->orderBy('name')
                ->take(1)
            )
            ->with('company')
            ->paginate();

        return view('lesson-16.users', compact('users'));
    }
}
