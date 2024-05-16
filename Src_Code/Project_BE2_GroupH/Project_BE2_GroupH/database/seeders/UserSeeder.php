<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('123456'),
            'phone' => '0585958765',
            'avatar' => 'default_admin.jpg',
        ]);

        for ($i = 1; $i <=50; $i++) {
            $user_name = 'test' . $i;
            DB::table('users')->insert([
                'name' => $user_name,
                'email' => $user_name . '@mail.com',
                'password' => Hash::make('123456'),
                'phone' => '0587456364',
                'avatar' => 'default_user1.jpg',
            ]);
        }
        for ($i = 50; $i <= 100; $i++) {
            $user_name = 'user' . $i;
            DB::table('users')->insert([
                'name' => $user_name,
                'email' => $user_name . '@mail.com',
                'password' => Hash::make('123456'),
                'phone' => '0587436124',
                'avatar' => 'default_user1.jpg',
            ]);
        }
    }
}
