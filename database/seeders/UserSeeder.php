<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Geary',
            'email' => 'ger@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'admin',
            'phone' => ''
        ]);
    }
}
