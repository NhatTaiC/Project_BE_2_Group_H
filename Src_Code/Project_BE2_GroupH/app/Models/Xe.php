<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Xe extends Model
{
    use HasFactory;

    protected $table = 'xe';

    protected $primaryKey = 'xe_id';

    public $incrementing = true;

    protected $fillable = [
        'maxe',
        'tenxe',
        'giaxe',
        'mauxe',
        'sochongoi',
        'dongco',
        'dungtichbinhxang',
        'hinhanhxe',
        'maloaixe',
    ];

    public function xe(): HasMany
    {
        return $this->hasMany(LoaiXe::class);
    }
}
