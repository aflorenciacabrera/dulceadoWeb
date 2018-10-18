<?php

namespace dulceado;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

public function users(){
        return $this
            ->belongsToMany('dulceado\User')
            ->withTimestamps();
    }
}
