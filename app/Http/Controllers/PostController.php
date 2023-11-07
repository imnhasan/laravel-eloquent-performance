<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
//        $status = (object) [];
//        $status->writing = Post::query()->where('status', 'writing')->count();
//        $status->planned = Post::query()->where('status', 'planned')->count();
//        $status->completed = Post::query()->where('status', 'completed')->count();

        $status = Post::query()->toBase()
            ->selectRaw("count(case when status = 'writing' then 1 end) as writing")
            ->selectRaw("count(case when status = 'planned' then 1 end) as planned")
            ->selectRaw("count(case when status = 'completed' then 1 end) as completed")
            ->first();

        $posts = Post::query()->paginate();

        return view('lesson-05.post', compact('posts', 'status'));
    }
}
