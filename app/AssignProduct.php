<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssignProduct extends Model
{
    protected $fillable=['assigned_user','product_cat','product_desc','date','remark','assignedby','sip'];
}
