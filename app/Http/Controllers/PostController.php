<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

//        //Too much memory take ---------------------------------------------------------------------------------------
//        $years = Post::query()
//            ->with('author')
//            ->latest('publish_at')
//            ->get()
//            ->groupBy(fn ($post) => $post->publish_at->year);

//        //Only selected field ----------------------------------------------------------------------------------------
//        $years = Post::query()
//            ->select('id', 'title', 'slug', 'publish_at', 'author_id')
//            ->with('author')
//            ->latest('publish_at')
//            ->get()
//            ->groupBy(fn ($post) => $post->publish_at->year);

//        //Query in with closer ---------------------------------------------------------------------------------------
//        $years = Post::query()
//            ->select('id', 'title', 'slug', 'publish_at', 'author_id')
//            ->with(['author' => function($query){
//                $query->select('id', 'name');
//            }])
//            ->latest('publish_at')
//            ->get()
//            ->groupBy(fn ($post) => $post->publish_at->year);

        //Shortcut form ------------------------------------------------------------------------------------------------
        $years = Post::query()
            ->select('id', 'title', 'slug', 'publish_at', 'author_id')
            ->with('author:id,name')
            ->latest('publish_at')
            ->get()
            ->groupBy(fn ($post) => $post->publish_at->year);

        return view('lesson-02.post', compact('years'));
    }
}
