<?php

namespace App\Sistema\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
   protected $fillable=['categoria_id','nombre','modelo','serie','descripcion','codigoqr','estado',];

    //protected $primaryKey = 'id';

     public function categorias() {
        return $this->belongsTo(Categoria::class);
    }
}
