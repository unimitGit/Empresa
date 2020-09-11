<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }
}

