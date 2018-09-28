<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //
    public function personales()
    {
        return $this->hasOne('App\Personales');
    }
}
