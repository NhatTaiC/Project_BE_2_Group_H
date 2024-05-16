<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiXeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loaixe')->insert([
            'maloaixe' => 'MLX001',
            'tenloaixe' => 'A-Class',
            'namsx' => '1990',
            'quocgia' => 'Đức',
            'mota' => 'Xe Thể Thao Loại Nhỏ',
            'hinhanh' => 'default_1.jpg'
        ]);

        DB::table('loaixe')->insert([
            'maloaixe' => 'MLX002',
            'tenloaixe' => 'B-Class',
            'namsx' => '1990',
            'quocgia' => 'Đức',
            'mota' => 'Xe Thể Thao Loại Nhỏ',
            'hinhanh' => 'default_2.png'
        ]);

        DB::table('loaixe')->insert([
            'maloaixe' => 'MLX003',
            'tenloaixe' => 'C-Class',
            'namsx' => '1990',
            'quocgia' => 'Đức',
            'mota' => 'Xe Thể Thao Loại Nhỏ',
            'hinhanh' => 'default_3.jpg'
        ]);

        DB::table('loaixe')->insert([
            'maloaixe' => 'MLX004',
            'tenloaixe' => 'D-Class',
            'namsx' => '1990',
            'quocgia' => 'Đức',
            'mota' => 'Xe Thể Thao Loại Nhỏ',
            'hinhanh' => 'default_4.png'
        ]);

        DB::table('loaixe')->insert([
            'maloaixe' => 'MLX005',
            'tenloaixe' => 'E-Class',
            'namsx' => '1990',
            'quocgia' => 'Đức',
            'mota' => 'Xe Thể Thao Loại Nhỏ',
            'hinhanh' => 'default_5.png'
        ]);

        DB::table('loaixe')->insert([
            'maloaixe' => 'MLX006',
            'tenloaixe' => 'F-Class',
            'namsx' => '1990',
            'quocgia' => 'Đức',
            'mota' => 'Xe Thể Thao Loại Nhỏ',
            'hinhanh' => 'default_6.jpg'
        ]);

        DB::table('loaixe')->insert([
            'maloaixe' => 'MLX007',
            'tenloaixe' => 'H-Class',
            'namsx' => '1990',
            'quocgia' => 'Đức',
            'mota' => 'Xe Thể Thao Loại Nhỏ',
            'hinhanh' => 'default_7.PNG'
        ]);

        DB::table('loaixe')->insert([
            'maloaixe' => 'MLX008',
            'tenloaixe' => 'K-Class',
            'namsx' => '1990',
            'quocgia' => 'Đức',
            'mota' => 'Xe Thể Thao Loại Nhỏ',
            'hinhanh' => 'default_8.PNG'
        ]);

        DB::table('loaixe')->insert([
            'maloaixe' => 'MLX009',
            'tenloaixe' => 'J-Class',
            'namsx' => '1990',
            'quocgia' => 'Đức',
            'mota' => 'Xe Thể Thao Loại Nhỏ',
            'hinhanh' => 'default_9.PNG'
        ]);

        DB::table('loaixe')->insert([
            'maloaixe' => 'MLX010',
            'tenloaixe' => 'l-Class',
            'namsx' => '1990',
            'quocgia' => 'Đức',
            'mota' => 'Xe Thể Thao Loại Nhỏ',
            'hinhanh' => 'default_10.PNG'
        ]);

        for ($i = 11; $i <= 50; $i++) {
            DB::table('loaixe')->insert([
                'maloaixe' => 'MLX0' . $i,
                'tenloaixe' => 'test',
                'namsx' => $i < 10 ? '190' . $i : '19' . $i,
                'quocgia' => 'test',
                'mota' => 'test',
                'hinhanh' => 'test',
            ]);
        }
    }
}
