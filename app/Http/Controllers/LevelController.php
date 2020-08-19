<?php

namespace App\Http\Controllers;



use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use DB;
use Session;


class LevelController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['checkUserEmailExists']]);

    }

    public function index(){
        $user_id = \Auth::user()->id;
        return view('level.start')->with('user_id',$user_id);
    }

    public function exam(Request $request){

        $user_id = $request->input('user_id');
        $level = new level();
        $user = User::find($user_id);



        $user_email = $user->email ;

        $level->user_id = $user_id;
        $level->email = $user_email ;
        $level->age =  $request->input('age');
        $level->experience  = $request->input('experience');


        $level->save();

       return view('level.exam')->with('user_id',$user_id);

        // var_dump($level);

     //  echo $level->age . " " . $user_email ;
    }

}