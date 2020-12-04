<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            'remember_token' => Str::random(10)
        ]);
    }
}
