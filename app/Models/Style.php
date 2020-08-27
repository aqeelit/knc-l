<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Style extends Model
{
    protected $fillable = ['user_id','score',];
    protected $dates = ['create_at','update_at'];
}

