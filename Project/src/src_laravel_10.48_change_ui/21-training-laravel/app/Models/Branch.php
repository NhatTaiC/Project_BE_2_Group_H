<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Branch extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'maCN';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'maCN',
        'tenCN',
        'diaChiCN',
        'sodtCN',
        'imgCN',
    ];


}
