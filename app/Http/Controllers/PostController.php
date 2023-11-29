<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        $posts = Post::query()
//            ->withCount('comments', 'votes')
//            ->latest()
//            ->paginate();

//        --------------------------------------------------------------------------------------------------------------

        $posts = Post::query()
            ->withCount('comments', 'votes')
            ->when(request('sort'),  function ($query, $sort) {
                switch($sort) {
                    case 'title' : return $query->orderBy('title', request('direction'));
                    case 'status' : return $query->orderByStatus(request('direction'));
                    case "activity" : return $query->orderByActivity(request('direction'));
                }
            })
            ->latest()
            ->paginate();

//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------
//        --------------------------------------------------------------------------------------------------------------

        return view('lesson-20.posts', compact('posts'));
    }
}
