<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactAdmin;
use App\Models\Config;
use Session;


class LevelController extends Controller
{

    public function index(){
        $user_id = \Auth::user()->id;
        return view('level.start')->with('user_id',$user_id);
    }

    public function start(){

    }

}