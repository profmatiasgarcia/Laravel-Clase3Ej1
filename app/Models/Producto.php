<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['Codigo', 'Descripcion', 'PrecioUnitario'];
}
