<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relationships')->insert([
            'maLienHe' => 'mlh01',
            'tenPhongBan' => 'BeDauCoder',
            'soDT' => '9498794'
        ]);
        DB::table('relationships')->insert([
            'maLienHe' => 'mlh02',
            'tenPhongBan' => 'BeDauTrading',
            'soDT' => '943398794'
        ]);
        DB::table('relationships')->insert([
            'maLienHe' => 'mlh03',
            'tenPhongBan' => 'BeDauKing',
            'soDT' => '943398794'
        ]);
        DB::table('relationships')->insert([
            'maLienHe' => 'mlh04',
            'tenPhongBan' => 'BeDauCoder',
            'soDT' => '9498794'
        ]);
        DB::table('relationships')->insert([
            'maLienHe' => 'mlh05',
            'tenPhongBan' => 'BeDauUpdate',
            'soDT' => '943398794'
        ]);
        DB::table('relationships')->insert([
            'maLienHe' => 'mlh06',
            'tenPhongBan' => 'BeDauCoder',
            'soDT' => '9498794'
        ]);
        DB::table('relationships')->insert([
            'maLienHe' => 'mlh07',
            'tenPhongBan' => 'BeDauTrading',
            'soDT' => '943398794'
        ]);
        DB::table('relationships')->insert([
            'maLienHe' => 'mlh08',
            'tenPhongBan' => 'BeDauKing',
            'soDT' => '943398794'
        ]);
        DB::table('relationships')->insert([
            'maLienHe' => 'mlh09',
            'tenPhongBan' => 'BeDauCoder',
            'soDT' => '9498794'
        ]);
        DB::table('relationships')->insert([
            'maLienHe' => 'mlh10',
            'tenPhongBan' => 'BeDauUpdate',
            'soDT' => '943398794'
        ]);
    }
}
