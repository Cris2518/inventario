<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salidas extends Model
{
    use HasFactory;

    protected $table = 'salidas';

    protected $fillable = [
        'nombre_producto',
        'cantidad'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
