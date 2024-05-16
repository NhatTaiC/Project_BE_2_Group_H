<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LoaiXe extends Model
{
    use HasFactory;

    protected $table = 'loaixe';

    protected $primaryKey = 'loaixe_id';

    public $incrementing = true;

    protected $fillable = [
        'maloaixe',
        'tenloaixe',
        'namsx',
        'quocgia',
        'mota',
        'hinhanh',
    ];

    public function xe(): HasMany {
        return $this->hasMany(Xe::class);
    }
}
