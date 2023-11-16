<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $users = User::factory(20)->create();

        Post::factory(50)->create()->each(
            function ($post) use ($users){
                $post->comment()->createMany(
                    Comment::factory(rand(1,50))->make()->each(function ($comment) use ($users){
                        $comment->user_id = $users->random()->id;
                    })->toArray()
                );
            }
        );

    }
}
