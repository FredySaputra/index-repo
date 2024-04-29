<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'admins';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nim',
        'nama',
        'jabatan',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts(): array
    {
        return [
            'nim',
            'password' => 'hashed',
        ];
    }
}

