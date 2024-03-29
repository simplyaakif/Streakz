<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-02-14 18:32:44',
                'verification_token' => '',
            ],[
                'id'                 => 2,
                'name'               => 'Aakif',
                'email'              => 'simply.aakif@gmail.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-02-14 18:32:44',
                'verification_token' => '',
            ],[
                'id'                 => 3,
                'name'               => 'Haider',
                'email'              => 'student@gmail.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-02-14 18:32:44',
                'verification_token' => '',
            ],[
                'id'                 => 4,
                'name'               => 'Anum',
                'email'              => 'anum@gmail.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-02-14 18:32:44',
                'verification_token' => '',
            ],[
                'id'                 => 5,
                'name'               => 'Rabail',
                'email'              => 'rabail@gmail.com',
                'password'           => bcrypt('password'),
                'remember_token'     => null,
                'verified'           => 1,
                'verified_at'        => '2021-02-14 18:32:44',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
