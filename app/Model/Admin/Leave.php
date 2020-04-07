<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    protected $table ='leaves';
    protected $fillable = ['leave_type', 'date_from', 'date_to', 'days', 'Reason','leave_type_offer','is_approved'];
}
