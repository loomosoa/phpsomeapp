<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        for ($i; $i < 100; $i++) {
            DB::table('posts')->insert([
                'title' => Str::random(30),
//                'text' => Str::random(500),
                'likes' => mt_rand(100,1000),
//                'user_id' => mt_rand(1,9),
            ]);
        }
    }
}
