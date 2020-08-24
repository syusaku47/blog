<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        $posts = ['カツ丼', '牛丼', 'ナムル'];

        foreach ($posts as $post) {
            DB::table('posts')->insert([
                'title' => $post,
                'text' => $post,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
