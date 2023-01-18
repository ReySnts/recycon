<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                'username' => 'admin',
                'email_address' => 'recyconadmin@gmail.com',
                'password' => 'admin',
                'is_admin' => true,
            ]);

            DB::table('users')->insert([
                'username' => 'kakloe',
                'email_address' => '123@gmail.com',
                'password' => 'notadmin',
                'is_admin' => false,
            ]);
    }
}
