<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto_MOM extends Model
{
    use HasFactory;

    protected $table = 'productos_mom';
    protected $fillable = ['nombre', 'descripcion', 'precio', 'stock'];
}

