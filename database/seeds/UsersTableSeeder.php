<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'user_name' => 'Sadia Akter',
            'email' => 'Admin@demo.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Officer',
            'user_name' => 'Mojnu Fida',
            'email' => 'officer@demo.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
