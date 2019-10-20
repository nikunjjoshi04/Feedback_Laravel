<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $fillable =['fname','lname','email','bdate','city','number','password','cpassword','image'];
}
