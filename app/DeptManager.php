<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeptManager extends Model
{
    protected $table = 'deptmanagers';

    public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }
}
