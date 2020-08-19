@extends('layouts.backend.index')
@section('content')
    <div class="page-header">
        <h2>The Page of exam</h2>
        <form id="examForm" class="form-horizontal" method="POST" action="{{ route('level.calculate') }}">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{ $user_id }}">
            <p>Please select your gender:</p>
            <input type="radio" id="q11" name="q1" value="{{'1'}}">
            <label for="male">Male</label><br>
            <input type="radio" id="q12" name="q1" value="{{'0'}}">
            <label for="female">Female</label><br>
            <input type="radio" id="q13" name="q1" value="{{'0'}}">
            <label for="other">Other</label><br><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="q21" name="q2" value="{{'0'}}">
            <label for="age1">0 - 30</label><br>
            <input type="radio" id="q22" name="q2" value="{{'0'}}">
            <label for="age2">31 - 60</label><br>
            <input type="radio" id="q23" name="q2" value="{{'1'}}">
            <label for="age3">61 - 100</label><br><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="q31" name="q3" value="{{'0'}}">
            <label for="age1">0 - 30</label><br>
            <input type="radio" id="q32" name="q3" value="{{'1'}}">
            <label for="age2">31 - 60</label><br>
            <input type="radio" id="q33" name="q3" value="{{'0'}}">
            <label for="age3">61 - 100</label><br><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="q41" name="q4" value="{{'0'}}">
            <label for="age1">0 - 30</label><br>
            <input type="radio" id="q42" name="q4" value="{{'0'}}">
            <label for="age2">31 - 60</label><br>
            <input type="radio" id="q43" name="q4" value="{{'1'}}">
            <label for="age3">61 - 100</label><br><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="q51" name="q5" value="{{'0'}}">
            <label for="age1">0 - 30</label><br>
            <input type="radio" id="q52" name="q5" value="{{'1'}}">
            <label for="age2">31 - 60</label><br>
            <input type="radio" id="q53" name="q5" value="{{'0'}}">
            <label for="age3">61 - 100</label><br><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="q61" name="q6" value="{{'1'}}">
            <label for="age1">0 - 30</label><br>
            <input type="radio" id="q62" name="q6" value="{{'0'}}">
            <label for="age2">31 - 60</label><br>
            <input type="radio" id="q63" name="q6" value="{{'0'}}">
            <label for="age3">61 - 100</label><br><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="q71" name="q7" value="{{'1'}}">
            <label for="age1">0 - 30</label><br>
            <input type="radio" id="q72" name="q7" value="{{'0'}}">
            <label for="age2">31 - 60</label><br>
            <input type="radio" id="q73" name="q7" value="{{'0'}}">
            <label for="age3">61 - 100</label><br><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="q81" name="q8" value="{{'0'}}">
            <label for="age1">0 - 30</label><br>
            <input type="radio" id="q82" name="q8" value="{{'1'}}">
            <label for="age2">31 - 60</label><br>
            <input type="radio" id="q83" name="q8" value="{{'0'}}">
            <label for="age3">61 - 100</label><br><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="q91" name="q9" value="{{'0'}}">
            <label for="age1">0 - 30</label><br>
            <input type="radio" id="q92" name="q9" value="{{'0'}}">
            <label for="age2">31 - 60</label><br>
            <input type="radio" id="q93" name="q9" value="{{'1'}}">
            <label for="age3">61 - 100</label><br><br>

            <br>

            <p>Please select your age:</p>
            <input type="radio" id="q101" name="q10" value="{{'0'}}">
            <label for="age1">0 - 30</label><br>
            <input type="radio" id="q102" name="q10" value="{{'1'}}">
            <label for="age2">31 - 60</label><br>
            <input type="radio" id="q103" name="q10" value="{{'0'}}">
            <label for="age3">61 - 100</label><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection