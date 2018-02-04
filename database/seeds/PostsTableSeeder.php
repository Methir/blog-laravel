<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->create([
            'name' => 'robson',
            'email' => 'robson@gmail.com',
            'level' => '1'
        ]);

        factory(Post::class)->create([
            'user_id' => $user->id,
        ]);
    }
}
