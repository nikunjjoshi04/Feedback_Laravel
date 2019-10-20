<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $table = "feedback";
    protected $fillable =['student_id','teacher_id','que1','que2','que3','que4','que5','que6','que7','que8','que9','que10','que11','que12','que13'];
}
