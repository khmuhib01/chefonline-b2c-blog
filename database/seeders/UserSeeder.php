<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
	            'first_name' => 'sajib',
                'last_name' => 'mridha',
                'email' => 'sajib@gmail.com',
                'is_role' => '1',
                'password' => bcrypt(123456),
	            'created_at' => now(),
	            'updated_at' => now(),
            ],
            [
	            'first_name' => 'kh',
                'last_name' => 'muhib',
                'email' => 'muhib@gmail.com',
                'is_role' => '1',
                'password' => bcrypt(123456),
	            'created_at' => now(),
	            'updated_at' => now(),
            ],
        ]);
    }
}
