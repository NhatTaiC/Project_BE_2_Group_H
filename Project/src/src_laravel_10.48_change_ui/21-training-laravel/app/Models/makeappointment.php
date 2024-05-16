<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makeappointment extends Model
{
    use HasFactory;
    
    protected $table = 'makeappointments';

    protected $primaryKey = 'makeappointments_id';
    public $incrementing = true;

    protected $fillable = [
        'MaLH',
        'TenLH',
        'TenKH',
        'SoDTKH',
        'MaLoaiXe',
        'TrangThai',
        'YeuCau',
        'HinhAnh'
    ];
}
