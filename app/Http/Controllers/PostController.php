<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->paginate();

        return view('lesson-06.post_index', compact('posts'));
    }

    public function show(Post $post)
    {
//        $post->load('comment.user', 'comment.post.comment');

        $post->load('comment.user');
        $post->comment->each->setRelation('post', $post);

        return view('lesson-06.post_show',  compact('post'));
    }
}
