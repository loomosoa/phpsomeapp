<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentsSeeder extends Seeder
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
            DB::table('comments')->insert([
                'comment' => Str::random(150),
                'post_id' => mt_rand(1,99),
            ]);
        }
    }
}
