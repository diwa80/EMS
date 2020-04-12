<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Assign_task extends Model
{
    protected $fillable = ['employee', 'tasks' ];


    public function users(){
        return $this->belongsTo('App\User');
    }

    public function employee_infos(){
        return $this->hasMany('App\Employee_infos');
    }
}
