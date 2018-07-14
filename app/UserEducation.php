<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    protected $fillable=['edu_option','user_id','course','strtyear','endyear','college','specialization','percentage','addedby'];
}
