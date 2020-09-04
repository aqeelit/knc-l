<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\InstructionLevel;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use App\Models\Style;
use DB;
use Session;


class CommandController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['checkUserEmailExists']]);

    }

    public function index(){
        $user_id = \Auth::user()->id;

        $style = Style::where('user_id', '=', $user_id)->first();
        $styleType = array();


            if ($style->activist > 0){
                array_push($styleType,'activist');
                var_dump($style->activist);
            }
            if ($style->reflector > 0){
                array_push($styleType,'reflector');
            }
            if ($style->sensing > 0){
                array_push($styleType,'sensing');
            }
            if ($style->intuitive > 0){
                array_push($styleType,'intuitive');
            }
            if ($style->visual > 0){
                array_push($styleType,'visual');
            }
            if ($style->verbal > 0){
                array_push($styleType,'verbal');
            }
            if ($style->seqenttial > 0){
                array_push($styleType,'verbal');
            }
            if ($style->global > 0){
                array_push($styleType,'verbal');
            }


        $comma = implode(",", $styleType);


        $level = Level::where('user_id', '=', $user_id)->first();
        $colevel = InstructionLevel::where('level','=', $level->k_level)->first();
        $course = Course::where('instruction_level_id','=',$colevel->id)->first();
        print_r($course);



    }




}