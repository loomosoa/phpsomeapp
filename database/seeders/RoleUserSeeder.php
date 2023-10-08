<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleUserSeeder extends Seeder
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
            DB::table('role_user')->insert([
                'user_id' => mt_rand(1,100),
                'role_id' => mt_rand(1,4),
            ]);
        }
    }
}
