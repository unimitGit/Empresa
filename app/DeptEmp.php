<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeptEmp extends Model
{
    protected $table = 'deptemps';

    public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }
}
