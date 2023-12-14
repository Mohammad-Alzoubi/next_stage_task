<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
           [
             'name'     => 'Admin',
             'username' => 'admin_user',
             'email'    => 'admin@gmail.com',
             'role'     => 'admin',
             'status'   => 'active',
             'image'    => 'backend/assets/img/avatar/avatar-1.png',
             'password' => bcrypt('password'),
           ],
        ]);
    }
}
