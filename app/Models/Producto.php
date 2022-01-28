<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //use HasFactory;
    protected $table="producto";
    protected $index="marca_producto";
    protected $filltable = [
        'nombre','talla', 'marca_producto', 'cantidad_inventario', 'fecha_embarque'
    ];

    public $timestamps = false;
    
}
