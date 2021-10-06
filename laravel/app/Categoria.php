<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";

    protected $fillable = ['id','cat_name', 'cat_active', 'cat_delete'];

    public $timestamps = false;
}
