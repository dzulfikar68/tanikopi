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
            [
                'name' => 'Pengelola Kopi Pertama',
                'email' => 'emailpertama@email.com',
                'address' => 'Address pengolah kopi pertama',
                'role' => 'pengolah',
                'phone' => '08999999999',
                'password' => md5('password'),
                'status' => 1,
                'gender' => 'male',
                'token' => 'IsW3T5xzxvVFNQnsnJDOn616w8CxS6VJ',
                'token_status' => 0,
                'token_lifetime' => '2018-11-27 22:11:51'
            ],

            [
                'name' => 'Pengelola Kopi Kedua',
                'email' => 'emailkedua@email.com',
                'address' => 'Address pengolah kopi kedua',
                'role' => 'pengolah',
                'phone' => '08999999999',
                'password' => md5('password'),
                'status' => 0,
                'gender' => 'female',
                'token' => 'IsW3T5xzxvVFNQnsnJDOn616w8CxS6GH',
                'token_status' => 1,
                'token_lifetime' => '2018-11-27 22:11:51'
            ],

            [
                'name' => 'Koperasi Pertama',
                'email' => 'emailketiga@email.com',
                'address' => 'Address koperasi pertama',
                'role' => 'koperasi',
                'phone' => '08999999999',
                'password' => md5('password'),
                'status' => 1,
                'gender' => 'male',
                'token' => 'IsW3T5xzxvVFNQnsnJDOn616w8SsdssJ',
                'token_status' => 0,
                'token_lifetime' => '2018-11-27 22:11:51'
            ],

            [
                'name' => 'Koperasi Kedua',
                'email' => 'emailkeempat@email.com',
                'address' => 'Address koperasi kedua',
                'role' => 'koperasi',
                'phone' => '08999999999',
                'password' => md5('password'),
                'status' => 1,
                'gender' => 'female',
                'token' => 'IsW3T5xzxvVFNQnsnJDOn616w8xdS6VJ',
                'token_status' => 0,
                'token_lifetime' => '2018-11-27 22:11:51'
            ]
        ]);
    }
}
