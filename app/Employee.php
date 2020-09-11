<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    

    public function phones()
    {
        return $this->hasOne('App\Phone');
    }

    public function titles()
    {
        return $this->hasMany('App\Title');
    }

    public function salaries()
    {
        return $this->hasMany('App\Salarie');
    }

    public function cars()
    {
		return $this->belongsToMany('App\Car', 'employeecars');
    }

    public function belongsToDepartment()
    {
		  return $this->belongsToMany('App\Deparment', 'deptemps');
    }

    public function managerToDepartment()
    {
		  return $this->belongsToMany('App\Deparment', 'deptmanagers');
    }


}
