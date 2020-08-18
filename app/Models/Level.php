<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Level extends Model
{
   protected $fillable = ['email','age','experience','grade','attempts'];
   protected $dates = ['create_at','update_at'];
}