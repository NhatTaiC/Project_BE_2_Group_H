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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user1',
            'email' => 'user1@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user4',
            'email' => 'user4@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user5',
            'email' => 'user5@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user6',
            'email' => 'user6@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user7',
            'email' => 'user7@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user8',
            'email' => 'user8@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user9',
            'email' => 'user9@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user10',
            'email' => 'user10@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user11',
            'email' => 'user11@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user12',
            'email' => 'user12@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user13',
            'email' => 'user13@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user14',
            'email' => 'user14@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user15',
            'email' => 'user15@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user16',
            'email' => 'user16@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user17',
            'email' => 'user17@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user18',
            'email' => 'user18@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user19',
            'email' => 'user19@mail.com',
            'password' => Hash::make('123456')
        ]);

        DB::table('users')->insert([
            'name' => 'user20',
            'email' => 'user20@mail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
