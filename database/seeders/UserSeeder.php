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
             'name'     => 'Admin user',
             'username' => 'adminuser',
             'email'    => 'admin@gmail.com',
             'role'     => 'admin',
             'status'   => 'active',
             'image'    => 'https://i.pravatar.cc/300?1',
             'password' => bcrypt('password'),
           ],
           [
             'name'     => 'Vendor user',
             'username' => 'vendoruser',
             'email'    => 'vendor@gmail.com',
             'role'     => 'vendor',
             'status'   => 'active',
             'image'    => 'https://i.pravatar.cc/300?2',
             'password' => bcrypt('password'),
           ],
           [
             'name'     => 'user',
             'username' => 'user',
             'email'    => 'user@gmail.com',
             'role'     => 'user',
             'status'   => 'active',
             'image'    => 'https://i.pravatar.cc/300?3',
             'password' => bcrypt('password'),
           ],
        ]);
    }
}
