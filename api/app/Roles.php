<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    //
    public function personal()
    {
        return $this->belongsToMany('App\Personal');
    }
}
