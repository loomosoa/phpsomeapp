<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $i = 1;
        for ($i; $i < 10; $i++) {
            DB::table('phones')->insert([
                'phone_number' => random_int(903,964)
                    ." "
                    .random_int(1000000, 9999999),
                'users_id' => mt_rand(1,9),
            ]);
        }

    }
}
