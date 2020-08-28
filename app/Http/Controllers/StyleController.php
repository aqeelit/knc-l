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

        $style = Style::where('user_id', '=', $user_id)->first();
        if ($style === null){
            return view('style.exam')->with('user_id',$user_id);
        }else{
            $user_id = $style->user_id;
            return view('style.exam')->with('user_id',$user_id);  //  return view('style.cant');
            }
        }


    public function exam(Request $request){

        $user_id = $request->input('user_id');
        $style = new style();


        $style->user_id = $user_id;
        $all_values = array_merge($request->all(), ['index' => 'value']);


         $type = array_count_values($all_values);
         print_r($type);

         // activist & reflector

         if ($type['activist'] > $type['reflector'] ){
             $activist = $type['activist'] - $type['reflector'];
             $reflector = 0 ;
         }else{
             $reflector = $type['reflector'] - $type['activist'];
             $activist = 0 ;
         }

         $style->activist = $activist ;
         $style->reflector = $reflector ;

        // sensing & intuitive

         if ($type['sensing'] > $type['intuitive'] ){
             $sensing = $type['sensing'] - $type['intuitive'];
             $intuitive = 0 ;
         }else{
             $intuitive = $type['intuitive'] - $type['sensing'];
             $sensing = 0 ;
         }

        $style->sensing = $sensing ;
        $style->intuitive = $intuitive ;


        // visual & verbal

        if ($type['visual'] > $type['verbal'] ){
            $visual = $type['visual'] - $type['verbal'];
            $verbal = 0 ;
        }else{
            $verbal = $type['verbal'] - $type['visual'];
            $visual = 0 ;
        }

        $style->visual = $visual ;
        $style->verbal = $verbal ;










       // $style->save();
       // $style_id = $style->id;

       // return view('style.end')->with('style_id',$style_id);

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