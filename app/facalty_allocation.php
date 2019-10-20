<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facalty_allocation extends Model
{
    protected $table = "facalty_allocations";
    protected $fillable =['teacher_id','class_id','sem_id','div_id','subject_id'];
}
