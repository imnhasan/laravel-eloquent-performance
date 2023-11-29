<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = User::factory(100)->create();

        Post::factory(50)->create()->each(function ($post) use ($users) {
            $post->comments()->createMany(
                Comment::factory(rand(1, 50))->make()->each(function ($comment) use ($users) {
                    $comment->user_id = $users->random()->id;
                })->toArray()
            );

            $post->votes()->createMany(
                Vote::factory(rand(0, 250))->make()->each(function ($vote) use ($users) {
                    $vote->user_id = $users->random()->id;
                })->toArray()
            );
        });
    }
}
