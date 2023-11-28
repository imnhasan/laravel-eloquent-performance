<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Checkout;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
//        $books = Book::query()
//            ->orderBy('name')
//            ->withLastCheckout()
//            ->with('lastCheckout.user')
//            ->paginate();
//        --------------------------------------------------------------------------------------------------------------

        // Using by join
//        $books = Book::query()
//            ->select('books.*')
//            ->join('checkouts', 'checkouts.book_id', '=', 'books.id')
//            ->groupBy('books.id')
//            ->orderByRaw('max(checkouts.borrowed_date) desc')
//            ->withLastCheckout()
//            ->with('lastCheckout.user')
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------
        // Using by sub-query
//        $books = Book::query()
//            ->orderByDesc(Checkout::select('borrowed_date')
//                ->whereColumn('book_id', 'books.id')
//                ->latest('borrowed_date')
//                ->take(1)
//            )
//            ->withLastCheckout()
//            ->with('lastCheckout.user')
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        // Using by query closer
//        $books = Book::query()
//            ->orderByDesc(function ($query) {
//                $query->select('borrowed_date')
//                    ->from('checkouts')
//                    ->whereColumn('book_id', 'books.id')
//                    ->latest('borrowed_date')
//                    ->take(1);
//            })
//            ->withLastCheckout()
//            ->with('lastCheckout.user')
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        // order by username
        $books = Book::query()
            ->orderBy(User::select('name')
                ->join('checkouts', 'checkouts.user_id', '=', 'users.id')
                ->whereColumn('checkouts.book_id', 'books.id')
                ->latest('borrowed_date')
                ->take(1)
            )
            ->withLastCheckout()
            ->with('lastCheckout.user')
            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        /*
         * So if you are dealing with much data this is not a good approach.
         * So you should need a caching data like you can create extra
         * in your books table 'last_checkout_id'. So where someone
         * borrowed a book you should update that field.
         * */

//        --------------------------------------------------------------------------------------------------------------


        return view('lesson-18.books', compact('books'));
    }
}
