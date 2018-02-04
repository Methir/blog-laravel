<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'methir',
            'email' => 'methir.game@gmail.com',
            'level' => '2',
        ]);

        factory(User::class, 20)->create()->each(function ($user){
            if($user->level > 0){
                factory(Post::class)->create([
                    'user_id' => $user->id,
                ]);
            }
        });
    }
}
