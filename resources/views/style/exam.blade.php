@extends('layouts.backend.index')
@section('content')
    <div class="page-header">
        <h2>The Page of exam</h2>
        <form id="examForm" class="form-horizontal" method="POST" action="{{ route('style.exam') }}">
            {{ csrf_field() }}
            <input type="hidden" name="user_id"  value="{{$user_id}}">
            <p>1- I understand something better after </p>
            <input type="radio" id="a1" name="q1" value="{{'activist'}}">
            <label for="a">try it out.</label><br>
            <input type="radio" id="b1" name="q1" value="{{'reflector'}}">
            <label for="b">think it through.</label><br>

            <br>

            <p>2- I would rather be considered</p>
            <input type="radio" id="a2" name="q2" value="{{'sensing'}}">
            <label for="a">realistic.</label><br>
            <input type="radio" id="b2" name="q2" value="{{'intuitive'}}">
            <label for="b">innovative.</label><br>


            <br>

            <p>3- Please select your age:</p>
            <input type="radio" id="a3" name="q3" value="{{'visual'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b3" name="q3" value="{{'verbal'}}">
            <label for="b">31 - 60</label><br>

            <br>

            <p>4- Please select your age:</p>
            <input type="radio" id="a4" name="q4" value="{{'sequential'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b4" name="q4" value="{{'global'}}">
            <label for="b">31 - 60</label><br>

            <br>

            <p>5- Please select your age:</p>
            <input type="radio" id="a5" name="q5" value="{{'activist'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b5" name="q5" value="{{'reflector'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>6- Please select your age:</p>
            <input type="radio" id="a6" name="q6" value="{{'sensing'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b6" name="q6" value="{{'intuitive'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>7- Please select your age:</p>
            <input type="radio" id="a7" name="q7" value="{{'visual'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b7" name="q7" value="{{'verbal'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>8- Please select your age:</p>
            <input type="radio" id="a8" name="q8" value="{{'sequential'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b8" name="q8" value="{{'global'}}">
            <label for="b">31 - 60</label><br>

            <br>

            <p>9- Please select your age:</p>
            <input type="radio" id="a9" name="q9" value="{{'activist'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b9" name="q9" value="{{'reflector'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>10- Please select your age:</p>
            <input type="radio" id="a10" name="q10" value="{{'sensing'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="a10" name="q10" value="{{'intuitive'}}">
            <label for="b">31 - 60</label><br>

            <br>

            <p>11- Please select your age:</p>
            <input type="radio" id="a11" name="q11" value="{{'visual'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b11" name="q11" value="{{'verbal'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>12- Please select your age:</p>
            <input type="radio" id="a12" name="q12" value="{{'sequential'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b12" name="q12" value="{{'global'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>13- Please select your age:</p>
            <input type="radio" id="a13" name="q13" value="{{'activist'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b13" name="q13" value="{{'reflector'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>14- Please select your age:</p>
            <input type="radio" id="a14" name="q14" value="{{'sensing'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b14" name="q14" value="{{'intuitive'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>15- Please select your age:</p>
            <input type="radio" id="a15" name="q15" value="{{'visual'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b15" name="q15" value="{{'verbal'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>16- Please select your age:</p>
            <input type="radio" id="a16" name="q16" value="{{'sequential'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b16" name="q16" value="{{'global'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>17- Please select your age:</p>
            <input type="radio" id="a17" name="q17" value="{{'activist'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b17" name="q17" value="{{'reflector'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>18- Please select your age:</p>
            <input type="radio" id="a18" name="q18" value="{{'sensing'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b18" name="q18" value="{{'intuitive'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>19- Please select your age:</p>
            <input type="radio" id="a19" name="q19" value="{{'visual'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b19" name="q19" value="{{'verbal'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>20- Please select your age:</p>
            <input type="radio" id="a20" name="q20" value="{{'sequential'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b20" name="q20" value="{{'global'}}">
            <label for="b">31 - 60</label><br>

            <br>

            <p>21- Please select your age:</p>
            <input type="radio" id="a21" name="q21" value="{{'activist'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b21" name="q21" value="{{'reflector'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <input type="submit" value="Submit">
        </form>
    </div>
@endsection