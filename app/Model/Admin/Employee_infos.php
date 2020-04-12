<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee_infos extends Model
{
    use SoftDeletes;

    protected $table ='employee_infos';
    protected $fillable = ['fname', 'email', 'uname', 'password', 'phone', 'position', 'salary', 'hired_date', 'profile_image'];

    protected $dates=['deleted_at'];

    public function assign_tasks(){
        return $this ->belongsTo('App\Model\Assign_task');
    }

}
