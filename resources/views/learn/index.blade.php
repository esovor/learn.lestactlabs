@extends('layouts.app')
@section('title', 'Learn & Revise')

@section('content')

    <section>
        <h1>Learn & Revise</h1>
        <p>Here you can find resources to help you learn and revise with Lestacklabs Academy for primary, secondary and post-secondary students.</p>
    </section>

    <section>

        <section>

            <div>
                @foreach($levels as $level)
                    <di>
                        <h2><a href="{{ route('learn.classes', $level->level_id) }}">{{$level->name}}</a></h2>
                        <p>{{$level->description}}</p>
                    </di>
                @endforeach
                <di>
                    <h2><a href="#">All Subjects</a></h2>
                    <p>A-Z Subjects</p>
                </di>

            </div>

        </section>



    </section>


    <section>
        <div>
            <h1>WAEC revision collections</h1>
            <p>Explore our comprehensive collection of WAEC revision materials, including past questions, study guides,
                and practice exams to help you prepare effectively for your WAEC exams.</p>
        </div>

        <div>
            <h1>Download the our Library app today</h1>
            <p>Access a wide range of educational resources, including quizzes, videos, revision guides for BECE, WASCE and Highers all in one convenient app. Download now and start your learning journey with LeStackLabs Library!</p>
        </div>

    </section>





@endsection
