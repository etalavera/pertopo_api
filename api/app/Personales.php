<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personales extends Model
{
    //
    public function clientes()
    {
        return $this->hasOne('App\Clientes');
    }
}
