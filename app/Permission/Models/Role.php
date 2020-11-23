<?php

namespace App\Permission\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //es: desde aqui
    //en: from here

    protected $fillable = [
        'name', 'slug', 'descripcion', 'full-access',
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }

    
}
