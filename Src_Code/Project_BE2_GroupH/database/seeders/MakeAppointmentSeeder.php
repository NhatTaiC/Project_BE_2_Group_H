<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MakeAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('makeappointments')->insert([
            'MaLH' => 'LH01',
            'TenKH' => 'Phong Vũ',
            'SoDTKH' => '0971171246',
            'MaLoaiXe' => 'MLX001',
            'TrangThai' => 'Thành công',
            'YeuCau' => 'Chọn màu đỏ',
            'HinhAnh' => 'default_makeappointment.jpg'
        ]);

        DB::table('makeappointments')->insert([
            'MaLH' => 'LH02',
            'TenKH' => 'Nhật Tài',
            'SoDTKH' => '0971178246',
            'MaLoaiXe' => 'MLX002',
            'TrangThai' => 'Thành công',
            'YeuCau' => 'Chọn màu Xanh',
            'HinhAnh' => 'default_makeappointment.jpg'
        ]);

        DB::table('makeappointments')->insert([
            'MaLH' => 'LH03',
            'TenKH' => 'Đức Sáng',
            'SoDTKH' => '0971145646',
            'MaLoaiXe' => 'MLX003',
            'TrangThai' => 'Thành công',
            'YeuCau' => 'Chọn màu đen',
            'HinhAnh' => 'default_makeappointment.jpg'
        ]);

        DB::table('makeappointments')->insert([
            'MaLH' => 'LH04',
            'TenKH' => 'Thanh Tài',
            'SoDTKH' => '0971112346',
            'MaLoaiXe' => 'MLX004',
            'TrangThai' => 'Thành công',
            'YeuCau' => 'Chọn màu vàng',
            'HinhAnh' => 'default_makeappointment.jpg'
        ]);

        DB::table('makeappointments')->insert([
            'MaLH' => 'LH05',
            'TenKH' => 'Thần Tiên',
            'SoDTKH' => '0971171999',
            'MaLoaiXe' => 'MLX005',
            'TrangThai' => 'Thành công',
            'YeuCau' => 'Chọn màu hồng',
            'HinhAnh' => 'default_makeappointment.jpg'
        ]);

        DB::table('makeappointments')->insert([
            'MaLH' => 'LH06',
            'TenKH' => 'Kim Long',
            'SoDTKH' => '0978881246',
            'MaLoaiXe' => 'MLX006',
            'TrangThai' => 'Thành công',
            'YeuCau' => 'Chọn màu trắng',
            'HinhAnh' => 'default_makeappointment.jpg'
        ]);

        DB::table('makeappointments')->insert([
            'MaLH' => 'LH07',
            'TenKH' => 'Nguyễn Kim',
            'SoDTKH' => '0971175556',
            'MaLoaiXe' => 'MLX007',
            'TrangThai' => 'Thành công',
            'YeuCau' => 'Chọn màu nâu',
            'HinhAnh' => 'default_makeappointment.jpg'
        ]);

        DB::table('makeappointments')->insert([
            'MaLH' => 'LH08',
            'TenKH' => 'Văn Dũng',
            'SoDTKH' => '0971333246',
            'MaLoaiXe' => 'MLX008',
            'TrangThai' => 'Thành công',
            'YeuCau' => 'Chọn màu đen',
            'HinhAnh' => 'default_makeappointment.jpg'
        ]);

        DB::table('makeappointments')->insert([
            'MaLH' => 'LH09',
            'TenKH' => 'Kim Tiền',
            'SoDTKH' => '0971222246',
            'MaLoaiXe' => 'MLX009',
            'TrangThai' => 'Thành công',
            'YeuCau' => 'Chọn màu hồng',
            'HinhAnh' => 'default_makeappointment.jpg'
        ]);

        DB::table('makeappointments')->insert([
            'MaLH' => 'LH010',
            'TenKH' => 'Khánh Nghi',
            'SoDTKH' => '0971171346',
            'MaLoaiXe' => 'MLX010',
            'TrangThai' => 'Thành công',
            'YeuCau' => 'Chọn màu trắng',
            'HinhAnh' => 'default_makeappointment.jpg'
        ]);

        for ($i=11; $i<=50 ; $i++) { 
            # code...
            DB::table('makeappointments')->insert([
                'MaLH' => 'LH0'.$i,
                'TenKH' => 'text',
                'SoDTKH' => '0971171346',
                'MaLoaiXe' => 'MLX0'.$i,
                'TrangThai' => 'Thành công',
                'YeuCau' => 'Chọn màu trắng',
                'HinhAnh' => 'default_makeappointment.jpg'
            ]);
    
        }

    }
}
