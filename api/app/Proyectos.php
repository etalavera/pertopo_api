<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    //
    public function lider_de_proyectos()
    {
        return $this->belongsToMany('App\LiderDeProyectos');
    }
}
