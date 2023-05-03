<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Larabot Admin',
                'email' => 'pr@larabot.com',
                'password' => Hash::make('qaz*963.-+')
            ]
        ];

        User::truncate();
        user::insert($users);
    }
}
