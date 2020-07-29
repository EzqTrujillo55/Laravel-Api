<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['codigo','nombre', 'precio', 'descripcion'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
