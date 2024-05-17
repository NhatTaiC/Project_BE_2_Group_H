<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->insert([
            'maCN' => 'maCN02',
            'tenCN' => 'BeDauCoder',
            'diaChiCN' => '9498794',
             'sodtCN' => 'BeDauCoder',
            'imgCN' => 'default_1.jng'
        ]);
        DB::table('branches')->insert([
            'maCN' => 'maCN01',
            'tenCN' => 'BeDauCoder',
            'diaChiCN' => '9498794',
            'sodtCN' => 'BeDauCoder',
            'imgCN' => 'default_1.png'
        ]);
        DB::table('branches')->insert([
            'maCN' => 'maCN03',
            'tenCN' => 'BeDauCoder',
            'diaChiCN' => '9498794',
            'sodtCN' => 'BeDauCoder',
            'imgCN' => 'default_1.png'
        ]);
        DB::table('branches')->insert([
            'maCN' => 'maCN04',
            'tenCN' => 'BeDauCoder',
            'diaChiCN' => '9498794',
            'sodtCN' => 'BeDauCoder',
            'imgCN' => 'default_1.png'
        ]);
        DB::table('branches')->insert([
            'maCN' => 'maCN05',
            'tenCN' => 'BeDauCoder',
            'diaChiCN' => '9498794',
            'sodtCN' => 'BeDauCoder',
            'imgCN' => 'default_1.png'
        ]);
        DB::table('branches')->insert([
            'maCN' => 'maCN06',
            'tenCN' => 'BeDauCoder',
            'diaChiCN' => '9498794',
            'sodtCN' => 'BeDauCoder',
            'imgCN' => 'default_1.png'
        ]);
        DB::table('branches')->insert([
            'maCN' => 'maCN07',
            'tenCN' => 'BeDauCoder',
            'diaChiCN' => '9498794',
            'sodtCN' => 'BeDauCoder',
            'imgCN' => 'default_1.png'
        ]);
        DB::table('branches')->insert([
            'maCN' => 'maCN08',
            'tenCN' => 'BeDauCoder',
            'diaChiCN' => '9498794',
            'sodtCN' => 'BeDauCoder',
            'imgCN' => 'default_1.png'
        ]);

    }
}
