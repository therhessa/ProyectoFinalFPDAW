<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function fruteria()
    {
        return $this->belongsTo(Fruteria::class);
    }

    public function categoria(){ 
        return $this->belongsTo(Categoria::class); //Pertenece a una categoría.
    }

}
