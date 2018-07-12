<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conveyance extends Model
{
   protected $fillable=['date','reason','disfrom','disto','mode','distance','paid','amount','uploadcimg'];
}
	