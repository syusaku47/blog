<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['いくら', 'かつお', 'サザエ'];
        foreach ($names as $name) {
            DB::table('comments')->insert([
                'post_id' => 3,
                'name' => "コメント {$name}",
                'text' => "最高 {$name}",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
