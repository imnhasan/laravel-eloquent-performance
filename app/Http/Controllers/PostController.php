<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        $posts = Post::query()
//            ->with('author')
//            ->latest('published_at')
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

//        $posts = Post::query()
//            ->with('author')
//            ->when(request('search'), function ($query, $search) {
//                $query->whereRaw('match(title, body) against (? in boolean mode)',[$search]);
//            })
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

//        $posts = Post::query()
//            ->with('author')
//            ->when(request('search'), function ($query, $search) {
//                $query->selectRaw('*, match(title, body) against (? in boolean mode) as score', [$search])
//                    ->whereRaw('match(title, body) against (? in boolean mode)',[$search]);
//            })
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

//        $posts = Post::query()
//            ->with('author')
//            ->when(request('search'), function ($query, $search) {
//                $query->selectRaw('*, match(title, body) against (? in boolean mode) as score', [$search])
//                    ->whereRaw('match(title, body) against (? in boolean mode)',[$search]);
//            })
//            ->latest('published_at')
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        $posts = Post::query()
            ->with('author')
            ->when(request('search'), function ($query, $search) {
                $query->selectRaw('*, match(title, body) against (? in boolean mode) as score', [$search])
                    ->whereRaw('match(title, body) against (? in boolean mode)',[$search]);
            }, function ($query) {
                $query->latest('published_at');
            })
            ->paginate();


//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------

        return view('lesson-23.posts', compact('posts'));
    }
}
