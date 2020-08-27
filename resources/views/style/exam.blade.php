@extends('layouts.backend.index')
@section('content')
    <div class="page-header">
        <h2>The Page of exam</h2>
        <form id="examForm" class="form-horizontal" method="POST" action="{{ route('style.calculate') }}">
            {{ csrf_field() }}
            <input type="hidden" name="level_id"  value="{{$style_id}}">
            <p>1- I understand something better after </p>
            <input type="radio" id="a1" name="a1" value="{{'1'}}">
            <label for="a">try it out.</label><br>
            <input type="radio" id="b1" name="b1" value="{{'1'}}">
            <label for="b">think it through.</label><br>

            <br>

            <p>2- I would rather be considered</p>
            <input type="radio" id="a2" name="a2" value="{{'1'}}">
            <label for="a">realistic.</label><br>
            <input type="radio" id="b2" name="b2" value="{{'1'}}">
            <label for="b">innovative.</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a3" name="a3" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b3" name="b3" value="{{'1'}}">
            <label for="b">31 - 60</label><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a4" name="a4" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b4" name="b4" value="{{'1'}}">
            <label for="b">31 - 60</label><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a5" name="a5" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b5" name="b5" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a6" name="a6" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b6" name="b6" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a7" name="a7" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b7" name="b7" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a8" name="a8" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b8" name="b8" value="{{'1'}}">
            <label for="b">31 - 60</label><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a9" name="a9" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b9" name="b9" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a10" name="b10" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="a10" name="b10" value="{{'1'}}">
            <label for="b">31 - 60</label><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a11" name="a11" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b11" name="b11" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a12" name="a12" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b12" name="b12" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a13" name="a13" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b13" name="b13" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a14" name="a14" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b14" name="b14" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a15" name="a15" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b15" name="b15" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a16" name="a16" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b16" name="b16" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a17" name="a17" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b17" name="b17" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a18" name="a18" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b18" name="b18" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a19" name="a19" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b19" name="b19" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a20" name="a20" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b20" name="b20" value="{{'1'}}">
            <label for="b">31 - 60</label><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="a21" name="a21" value="{{'1'}}">
            <label for="a">0 - 30</label><br>
            <input type="radio" id="b21" name="b21" value="{{'1'}}">
            <label for="b">31 - 60</label><br>


            <br>

            <input type="submit" value="Submit">
        </form>
    </div>
@endsection