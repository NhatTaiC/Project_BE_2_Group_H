<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('123456'),
            'phone' => '0123456789',
            'avatar' => "profile.png",
            'mssv' => 'test',
        ]);

        for ($i = 1; $i <= 30; $i++) {
            $user_name = 'user' . $i;
            DB::table('users')->insert([
                'name' => $user_name,
                'email' => $user_name . '@mail.com',
                'password' => Hash::make('123456'),
                'phone' => '0123456789',
                'avatar' => "",
                'mssv' => $user_name,
            ]);
        }
    }
}
