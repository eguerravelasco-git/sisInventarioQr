<?php

namespace App\Sistema\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable=['nombre','descripcion','estado'];
   
}
