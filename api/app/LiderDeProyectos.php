<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiderDeProyectos extends Model
{
    //
    public function lider_de_proyectos($personal_id)
    {
        $table = LiderDeProyectos::where('personal_id', $personal_id)->get();
        return $table;
    }
}
