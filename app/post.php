<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // protected  $table = "posts";  // if table name is defrent of model
    // protected $fillable = ['title', 'content'];    // just this fields can update
    protected $guarded = ['id'];   // this fields can not update
}
