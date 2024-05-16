<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class XeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('xe')->insert([
            'maxe' => 'MX001',
            'tenxe' => 'AMG A300',
            'giaxe' => '300000',
            'mauxe' => 'red',
            'sochongoi' => '4',
            'dongco' => 'v6 4.0',
            'dungtichbinhxang' => '400 lit',
            'hinhanhxe' => 'default_1.jpg',
            'maloaixe' => 'MLX001'
        ]);

        DB::table('xe')->insert([
            'maxe' => 'MX002',
            'tenxe' => 'AMG A302',
            'giaxe' => '400000',
            'mauxe' => 'black',
            'sochongoi' => '4',
            'dongco' => 'v6 4.0',
            'dungtichbinhxang' => '400 lit',
            'hinhanhxe' => 'default_2.png',
            'maloaixe' => 'MLX002'
        ]);

        DB::table('xe')->insert([
            'maxe' => 'MX003',
            'tenxe' => 'AMG A303',
            'giaxe' => '500000',
            'mauxe' => 'blue',
            'sochongoi' => '4',
            'dongco' => 'v6 4.0',
            'dungtichbinhxang' => '400 lit',
            'hinhanhxe' => 'default_3.jpg',
            'maloaixe' => 'MLX003'
        ]);

        DB::table('xe')->insert([
            'maxe' => 'MX004',
            'tenxe' => 'AMG A304',
            'giaxe' => '600000',
            'mauxe' => 'black',
            'sochongoi' => '4',
            'dongco' => 'v6 4.0',
            'dungtichbinhxang' => '400 lit',
            'hinhanhxe' => 'default_4.png',
            'maloaixe' => 'MLX004'
        ]);

        DB::table('xe')->insert([
            'maxe' => 'MX005',
            'tenxe' => 'AMG A305',
            'giaxe' => '700000',
            'mauxe' => 'pink',
            'sochongoi' => '4',
            'dongco' => 'v6 4.0',
            'dungtichbinhxang' => '400 lit',
            'hinhanhxe' => 'default_5.png',
            'maloaixe' => 'MLX005'
        ]);

        DB::table('xe')->insert([
            'maxe' => 'MX006',
            'tenxe' => 'AMG A306',
            'giaxe' => '800000',
            'mauxe' => 'green',
            'sochongoi' => '4',
            'dongco' => 'v6 4.0',
            'dungtichbinhxang' => '400 lit',
            'hinhanhxe' => 'default_6.jpg',
            'maloaixe' => 'MLX006'
        ]);

        DB::table('xe')->insert([
            'maxe' => 'MX007',
            'tenxe' => 'AMG A307',
            'giaxe' => '900000',
            'mauxe' => 'dark',
            'sochongoi' => '4',
            'dongco' => 'v6 4.0',
            'dungtichbinhxang' => '400 lit',
            'hinhanhxe' => 'default_7.png',
            'maloaixe' => 'MLX007'
        ]);

        DB::table('xe')->insert([
            'maxe' => 'MX008',
            'tenxe' => 'AMG A308',
            'giaxe' => '100000',
            'mauxe' => 'orange',
            'sochongoi' => '4',
            'dongco' => 'v6 4.0',
            'dungtichbinhxang' => '400 lit',
            'hinhanhxe' => 'default_8.png',
            'maloaixe' => 'MLX008'
        ]);

        DB::table('xe')->insert([
            'maxe' => 'MX009',
            'tenxe' => 'AMG A309',
            'giaxe' => '200000',
            'mauxe' => 'black',
            'sochongoi' => '4',
            'dongco' => 'v6 4.0',
            'dungtichbinhxang' => '400 lit',
            'hinhanhxe' => 'default_9.png',
            'maloaixe' => 'MLX009'
        ]);

        DB::table('xe')->insert([
            'maxe' => 'MX010',
            'tenxe' => 'AMG A310',
            'giaxe' => '300000',
            'mauxe' => 'yellow',
            'sochongoi' => '4',
            'dongco' => 'v6 4.0',
            'dungtichbinhxang' => '400 lit',
            'hinhanhxe' => 'default_10.png',
            'maloaixe' => 'MLX0010'
        ]);

        for ($i = 11; $i <= 50; $i++) {
            DB::table('xe')->insert([
                'maxe' => 'MX0' . $i,
                'tenxe' => 'test',
                'giaxe' => 'test',
                'mauxe' => 'test',
                'sochongoi' => 'test',
                'dongco' => 'test',
                'dungtichbinhxang' => 'test',
                'hinhanhxe' => 'test',
                'maloaixe' => 'MLX0' . $i,
            ]);
        }
    }
}
