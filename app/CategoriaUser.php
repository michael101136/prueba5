<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaUser extends Model
{
    protected $table = 'categoria_users';
        protected $fillable = ['id','titulo', 'ruta' , 'contenido','user_id','categoria_id']; 
}
