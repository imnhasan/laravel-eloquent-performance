<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {

//        $books = Book::query()
//            ->with('user')
//            ->orderBy('name')
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

//        $books = Book::query()
//            ->with('user')
//            ->orderByDesc('user_id')
//            ->orderBy('name')
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        $books = Book::query()
            ->with('user')
            ->orderByRaw('user_id is null')
            ->orderBy('name')
            ->paginate();

        return view('lesson-19.books', compact('books'));
    }
}
