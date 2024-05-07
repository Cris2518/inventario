<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entradas extends Model
{
    use HasFactory;

    protected $table = 'entradas';

    protected $fillable = [
        'nombre_producto',
        'cantidad',
        'status'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
