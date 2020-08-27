<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Level;
use App\Models\Style;
use DB;
use Session;


class StyleController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth', ['except' => ['checkUserEmailExists']]);

    }

    public function index(){
        $user_id = \Auth::user()->id;
        $user_email = \Auth::user()->email;

        $level = Level::where('email', '=', $user_email)->first();
        if ($level === null){
            return view('level.start')->with('user_id',$user_id);
        }else{
            $level_id = $level->id;
            if ($level->attempts < 3 ) {
                return view('level.exam')->with('level_id', $level_id);
            }else{
                return view('level.cant');
            }
        }


    }

    public function exam(Request $request){

        $user_id = $request->input('user_id');
        $level = new level();
        $user = User::find($user_id);



        $user_email = $user->email;

        $level->user_id = $user_id;
        $level->email = $user_email;
        $level->age = $request->input('age');
        $level->experience = $request->input('experience');


        $level->save();
        $level_id = $level->id;

        return view('level.exam')->with('level_id',$level_id);

        // var_dump($level);

        //  echo $level->age . " " . $user_email ;
    }

    public function calculate(Request $request)
    {

        $level_id = $request->input('level_id');
        $level = Level::find($level_id);

        $sum =  $request->input('q1');
        $sum += $request->input('q2');
        $sum += $request->input('q3');
        $sum += $request->input('q4');
        $sum += $request->input('q5');
        $sum += $request->input('q6');
        $sum += $request->input('q7');
        $sum += $request->input('q8');
        $sum += $request->input('q9');
        $sum += $request->input('q10');

//         echo $sum ."<br>" ;
//         echo $level_id;


        $level->grade = $sum ;

        if($level->attempts == '0'){
            $level->attempts = '1';
            // $level->save();
        }elseif ($level->attempts == '1'){
            $level->attempts = '2';
            // $level->update();
        }elseif ($level->attempts == '2'){
            $level->attempts = '3';
            // $level->update();
        }



        $samples = [[2 ,22, 8], [1,25,10], [3 ,23, 7], [ 3,28, 2], [1 ,30, 10], [3,20,6]];
        $labels = ['level 1', 'level 1', 'level 2', 'level 2', 'level 1', 'level 2'];

        $classifier = new KNearestNeighbors();
        $classifier->train($samples, $labels);

        $prediction = $classifier->predict([$level->attempts,$level->age ,$level->grade]);
        // echo $prediction;

        $level->k_level = $prediction;

        $level->Update();

        return view('level.end');

    }

}