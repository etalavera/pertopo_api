<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    //
    public function hizoElTrato()
    {
        return $this->hasMany('app\Personas', 'id');
    }
}
