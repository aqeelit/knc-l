@extends('layouts.backend.index')
@section('content')
    <div class="page-header">
        <h2>The Page of exam</h2>
        <form id="examForm" class="form-horizontal" method="POST" action="{{ route('style.exam') }}">
            {{ csrf_field() }}
            <input type="hidden" name="user_id"  value="{{$user_id}}">
            <p>1- I understand something better after </p>
            <input type="radio" id="a1" name="q1" value="{{'activist'}}">
            <label for="a"> (a) try it out.</label><br>
            <input type="radio" id="b1" name="q1" value="{{'reflector'}}">
            <label for="b"> (b) think it through.</label><br>

            <br>

            <p>2- I would rather be considered</p>
            <input type="radio" id="a2" name="q2" value="{{'sensing'}}">
            <label for="a"> (a) realistic.</label><br>
            <input type="radio" id="b2" name="q2" value="{{'intuitive'}}">
            <label for="b"> (b) innovative.</label><br>


            <br>

            <p>3- When I think about what I did yesterday, I am most likely to get</p>
            <input type="radio" id="a3" name="q3" value="{{'visual'}}">
            <label for="a"> (a) a picture</label><br>
            <input type="radio" id="b3" name="q3" value="{{'verbal'}}">
            <label for="b"> (b) words.</label><br>

            <br>

            <p>4- I tend to </p>
            <input type="radio" id="a4" name="q4" value="{{'sequential'}}">
            <label for="a"> (a) understand details of a subject but may be fuzzy about its overall structure.</label><br>
            <input type="radio" id="b4" name="q4" value="{{'global'}}">
            <label for="b"> (b) understand the overall structure but may be fuzzy about details.</label><br>

            <br>

            <p>5- When I am learning something new, it helps me to</p>
            <input type="radio" id="a5" name="q5" value="{{'activist'}}">
            <label for="a"> (a) talk about it.</label><br>
            <input type="radio" id="b5" name="q5" value="{{'reflector'}}">
            <label for="b"> (b) think about it.</label><br>


            <br>

            <p>6- If I were a teacher, I would rather teach a course </p>
            <input type="radio" id="a6" name="q6" value="{{'sensing'}}">
            <label for="a"> (a) that deals with facts and real life situations.</label><br>
            <input type="radio" id="b6" name="q6" value="{{'intuitive'}}">
            <label for="b"> (b) that deals with ideas and theories.</label><br>


            <br>

            <p>7- I prefer to get new information in</p>
            <input type="radio" id="a7" name="q7" value="{{'visual'}}">
            <label for="a">(a) pictures, diagrams, graphs, or maps.</label><br>
            <input type="radio" id="b7" name="q7" value="{{'verbal'}}">
            <label for="b">(b) written directions or verbal information.</label><br>


            <br>

            <p>8- Once I understand</p>
            <input type="radio" id="a8" name="q8" value="{{'sequential'}}">
            <label for="a">(a) all the parts, I understand the whole thing.</label><br>
            <input type="radio" id="b8" name="q8" value="{{'global'}}">
            <label for="b">(b) the whole thing, I see how the parts fit.</label><br>

            <br>

            <p>9- In a study group working on difficult material, I am more likely to</p>
            <input type="radio" id="a9" name="q9" value="{{'activist'}}">
            <label for="a">(a) jump in and contribute ideas.</label><br>
            <input type="radio" id="b9" name="q9" value="{{'reflector'}}">
            <label for="b">(b) sit back and listen.</label><br>


            <br>

            <p>10- I find it easier</p>
            <input type="radio" id="a10" name="q10" value="{{'sensing'}}">
            <label for="a">(a) to learn facts.</label><br>
            <input type="radio" id="a10" name="q10" value="{{'intuitive'}}">
            <label for="b">(b) to learn concepts.</label><br>

            <br>

            <p>11- In a book with lots of pictures and charts, I am likely to</p>
            <input type="radio" id="a11" name="q11" value="{{'visual'}}">
            <label for="a">(a) look over the pictures and charts carefully.</label><br>
            <input type="radio" id="b11" name="q11" value="{{'verbal'}}">
            <label for="b">(b) focus on the written text.</label><br>


            <br>

            <p>12- When I solve maths problems</p>
            <input type="radio" id="a12" name="q12" value="{{'sequential'}}">
            <label for="a">(a) I usually work my way to the solutions one step at a time.</label><br>
            <input type="radio" id="b12" name="q12" value="{{'global'}}">
            <label for="b">(b) I often just see the solutions but then have to struggle to figure out the steps to get to them.</label><br>


            <br>

            <p>13- In classes I have taken</p>
            <input type="radio" id="a13" name="q13" value="{{'activist'}}">
            <label for="a">(a) I have usually got to know many of the students.</label><br>
            <input type="radio" id="b13" name="q13" value="{{'reflector'}}">
            <label for="b">(b) I have rarely got to know many of the students.</label><br>


            <br>

            <p>14- In reading non-fiction, I prefer</p>
            <input type="radio" id="a14" name="q14" value="{{'sensing'}}">
            <label for="a">(a) something that teaches me new facts or tells me how to do something.</label><br>
            <input type="radio" id="b14" name="q14" value="{{'intuitive'}}">
            <label for="b">(b) something that gives me new ideas to think about.</label><br>


            <br>

            <p>15- I like teachers</p>
            <input type="radio" id="a16" name="q16" value="{{'sequential'}}">
            <label for="a">(a) who put a lot of diagrams on the board.</label><br>
            <input type="radio" id="b16" name="q16" value="{{'global'}}">
            <label for="b">(b) who spend a lot of time explaining.</label><br>


            <br>

            <p>16- When I'm analysing a story or a novel</p>
            <input type="radio" id="a15" name="q15" value="{{'visual'}}">
            <label for="a">(a) I think of the incidents and try to put them together to figure out the themes.</label><br>
            <input type="radio" id="b15" name="q15" value="{{'verbal'}}">
            <label for="b">(b) I just know what the themes are when I finish reading and then I have to go back and find the incidents that demonstrate them.</label><br>

            <br>

            <p>17- When I start a homework problem, I am more likely to</p>
            <input type="radio" id="a17" name="q17" value="{{'activist'}}">
            <label for="a">(a) start working on the solution immediately.</label><br>
            <input type="radio" id="b17" name="q17" value="{{'reflector'}}">
            <label for="b">(b) try to fully understand the problem first.</label><br>


            <br>

            <p>18- I prefer the idea of</p>
            <input type="radio" id="a18" name="q18" value="{{'sensing'}}">
            <label for="a">(a) certainty.</label><br>
            <input type="radio" id="b18" name="q18" value="{{'intuitive'}}">
            <label for="b">(b) theory.</label><br>


            <br>

            <p>19- I remember best</p>
            <input type="radio" id="a19" name="q19" value="{{'visual'}}">
            <label for="a">(a) what I see.</label><br>
            <input type="radio" id="b19" name="q19" value="{{'verbal'}}">
            <label for="b">(b) what I hear.</label><br>


            <br>

            <p>20- It is more important to me that an instructor</p>
            <input type="radio" id="a20" name="q20" value="{{'sequential'}}">
            <label for="a">(a) lay out the material in clear sequential steps.</label><br>
            <input type="radio" id="b20" name="q20" value="{{'global'}}">
            <label for="b">(b) give me an overall picture and relate the material to other subjects.</label><br>

            <br>

            <p>21- I prefer to study</p>
            <input type="radio" id="a21" name="q21" value="{{'activist'}}">
            <label for="a">(a) in a group.</label><br>
            <input type="radio" id="b21" name="q21" value="{{'reflector'}}">
            <label for="b">(b) alone.</label><br>


            <br>

            <p>22- I am more likely to be considered</p>
            <input type="radio" id="a22" name="q22" value="{{'sensing'}}">
            <label for="a">(a) careful about the details of my work.</label><br>
            <input type="radio" id="b22" name="q22" value="{{'intuitive'}}">
            <label for="b">(b) creative about how to do my work.</label><br>


            <br>

            <p>23- When I get directions to a new place, I prefer</p>
            <input type="radio" id="a23" name="q23" value="{{'visual'}}">
            <label for="a">(a) a map.</label><br>
            <input type="radio" id="b23" name="q23" value="{{'verbal'}}">
            <label for="b">(b) written instructions.</label><br>


            <br>

            <p>24- I learn</p>
            <input type="radio" id="a24" name="q24" value="{{'sequential'}}">
            <label for="a">(a) at a fairly regular pace. If I study hard, I'll "get it."</label><br>
            <input type="radio" id="b24" name="q24" value="{{'global'}}">
            <label for="b">(b) in fits and starts. I'll be totally confused and then suddenly it all "clicks."</label><br>

            <br>

            <p>25- I would rather first</p>
            <input type="radio" id="a25" name="q25" value="{{'activist'}}">
            <label for="a">(a) try things out.</label><br>
            <input type="radio" id="b25" name="q25" value="{{'reflector'}}">
            <label for="b">(b) think about how I'm going to do it.</label><br>


            <br>

            <p>26- When I am reading for enjoyment, I like writers to</p>
            <input type="radio" id="a26" name="q26" value="{{'sensing'}}">
            <label for="a">(a) clearly say what they mean.</label><br>
            <input type="radio" id="b26" name="q26" value="{{'intuitive'}}">
            <label for="b">(b) say things in creative, interesting ways.</label><br>


            <br>

            <p>27- When I see a diagram or sketch in class, I am most likely to remember</p>
            <input type="radio" id="a27" name="q27" value="{{'visual'}}">
            <label for="a">(a) the picture.</label><br>
            <input type="radio" id="b27" name="q27" value="{{'verbal'}}">
            <label for="b">(b) what the instructor said about it.</label><br>


            <br>

            <p>28- When considering a body of information, I am more likely to</p>
            <input type="radio" id="a28" name="q28" value="{{'sequential'}}">
            <label for="a">(a) focus on details and miss the big picture.</label><br>
            <input type="radio" id="b28" name="q28" value="{{'global'}}">
            <label for="b">(b) try to understand the big picture before getting into the details.</label><br>

            <br>

            <p>29- I more easily remember</p>
            <input type="radio" id="a29" name="q29" value="{{'activist'}}">
            <label for="a">(a) something I have done.</label><br>
            <input type="radio" id="b29" name="q29" value="{{'reflector'}}">
            <label for="b">(b) something I have thought a lot about.</label><br>


            <br>

            <p>30- When I have to perform a task, I prefer to</p>
            <input type="radio" id="a30" name="q30" value="{{'sensing'}}">
            <label for="a">(a) master one way of doing it.</label><br>
            <input type="radio" id="b30" name="q30" value="{{'intuitive'}}">
            <label for="b">(b) come up with new ways of doing it.</label><br>


            <br>

            <p>31- When someone is showing me data, I prefer</p>
            <input type="radio" id="a31" name="q31" value="{{'visual'}}">
            <label for="a">(a) charts or graphs.</label><br>
            <input type="radio" id="b31" name="q31" value="{{'verbal'}}">
            <label for="b">(b) text summarizing the results.</label><br>


            <br>

            <p>32- When writing a paper, I am more likely to</p>
            <input type="radio" id="a32" name="q32" value="{{'sequential'}}">
            <label for="a">(a) work on (think about or write) the beginning of the paper and progress forward.</label><br>
            <input type="radio" id="b32" name="q32" value="{{'global'}}">
            <label for="b">(b) work on (think about or write) different parts of the paper and then order them.</label><br>

            <br>

            <p>33- When I have to work on a group project, I first want to</p>
            <input type="radio" id="a33" name="q33" value="{{'activist'}}">
            <label for="a">(a) have a "group brainstorming" where everyone contributes ideas.</label><br>
            <input type="radio" id="b33" name="q33" value="{{'reflector'}}">
            <label for="b">(b) brainstorm individually and then come together as a group to compare ideas.</label><br>


            <br>

            <p>34- I consider it higher praise to call someone</p>
            <input type="radio" id="a34" name="q34" value="{{'sensing'}}">
            <label for="a">(a) sensible.</label><br>
            <input type="radio" id="b34" name="q34" value="{{'intuitive'}}">
            <label for="b">(b) imaginative.</label><br>


            <br>

            <p>35- When I meet people at a party, I am more likely to remember</p>
            <input type="radio" id="a35" name="q35" value="{{'visual'}}">
            <label for="a">(a) what they looked like.</label><br>
            <input type="radio" id="b35" name="q35" value="{{'verbal'}}">
            <label for="b">(b) what they said about themselves.</label><br>


            <br>

            <p>36- When I am learning a new subject, I prefer to</p>
            <input type="radio" id="a36" name="q36" value="{{'sequential'}}">
            <label for="a">(a) stay focused on that subject, learning as much about it as I can.</label><br>
            <input type="radio" id="b36" name="q36" value="{{'global'}}">
            <label for="b">(b) try to make connections between that subject and related subjects.</label><br>

            <br>

            <p>37- I am more likely to be considered</p>
            <input type="radio" id="a37" name="q37" value="{{'activist'}}">
            <label for="a">(a) outgoing.</label><br>
            <input type="radio" id="b37" name="q37" value="{{'reflector'}}">
            <label for="b">(b) reserved.</label><br>


            <br>

            <p>38- I prefer courses that emphasise</p>
            <input type="radio" id="a38" name="q38" value="{{'sensing'}}">
            <label for="a">(a) concrete material (facts, data).</label><br>
            <input type="radio" id="b38" name="q38" value="{{'intuitive'}}">
            <label for="b">(b) abstract material (concepts, theories).</label><br>


            <br>

            <p>39- For entertainment, I would rather</p>
            <input type="radio" id="a39" name="q39" value="{{'visual'}}">
            <label for="a">(a) watch television.</label><br>
            <input type="radio" id="b39" name="q39" value="{{'verbal'}}">
            <label for="b">(b) read a book.</label><br>


            <br>

            <p>40- Some teachers start their lectures with an outline of what they will cover. Such outlines are</p>
            <input type="radio" id="a40" name="q40" value="{{'sequential'}}">
            <label for="a">(a) somewhat helpful to me.</label><br>
            <input type="radio" id="b40" name="q40" value="{{'global'}}">
            <label for="b">(b) very helpful to me.</label><br>

            <br>

            <p>41- The idea of doing homework in groups, with one grade for the entire group,</p>
            <input type="radio" id="a41" name="q41" value="{{'activist'}}">
            <label for="a">(a) appeals to me.</label><br>
            <input type="radio" id="b41" name="q41" value="{{'reflector'}}">
            <label for="b">(b) does not appeal to me.</label><br>


            <br>

            <p>42- When I am doing long calculations,</p>
            <input type="radio" id="a42" name="q42" value="{{'sensing'}}">
            <label for="a">(a) I tend to repeat all my steps and check my work carefully.</label><br>
            <input type="radio" id="b42" name="q42" value="{{'intuitive'}}">
            <label for="b">(b) I find checking my work tiresome and have to force myself to do it.</label><br>


            <br>

            <p>43- I tend to picture places I have been</p>
            <input type="radio" id="a43" name="q43" value="{{'visual'}}">
            <label for="a">(a) easily and fairly accurately.</label><br>
            <input type="radio" id="b43" name="q43" value="{{'verbal'}}">
            <label for="b">(b) with difficulty and without much detail.</label><br>


            <br>

            <p>44- When solving problems in a group, I would be more likely to</p>
            <input type="radio" id="a44" name="q44" value="{{'sequential'}}">
            <label for="a">(a) think of the steps in the solution process.</label><br>
            <input type="radio" id="b44" name="q44" value="{{'global'}}">
            <label for="b">(b) think of possible consequences or applications of the solution in a wide range of areas.</label><br>

            <br>


            <input type="submit" value="Submit">
        </form>
    </div>
@endsection