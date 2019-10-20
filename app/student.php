<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable =['e_no','name','email','phone_number','address','class_id','sem_id','div_id','password'];
}
