<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    //
    public function roles()
    {
        return $this->belongsToMany('App\Roles');
    }

    public function lider_de_proyectos()
    {
        return $this->belongsToMany('App\LiderDeProyectos');
    }
}
