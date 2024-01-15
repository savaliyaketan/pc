<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('password');

        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => $password,
                'created_at' => now(),
            ],
            [
                'name' => 'Author',
                'email' => 'author@author.com',
                'password' => $password,
                'created_at' => now(),
            ],
            [
                'name' => 'Editor',
                'email' => 'editor@editor.com',
                'password' => $password,
                'created_at' => now(),
            ],
            [
                'name' => 'User',
                'email' => 'user@user.com',
                'password' => $password,
                'created_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
