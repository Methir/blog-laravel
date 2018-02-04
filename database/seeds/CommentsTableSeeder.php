<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        $users = User::all();

        $posts->each(function ($post) use ($users){
            $user = $users->shuffle()->first();

            factory(Comment::class, 2)->create([
                'post_id' => $post->id,
                'user_id' => $user->id,
            ]);
        });
    }
}
