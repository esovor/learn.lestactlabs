@extends('layouts.app')
@section('title', 'Learn & Revise')

@section('content')

    <section class="learnHeader">
        <h1>Learn & Revise</h1>
        <p>Here you can find resources to help you learn and revise with Lestacklabs Academy for primary, secondary and post-secondary students.</p>
    </section>

    <section class="learnLevel">
        <x-levels l-title="Primary" l-description="Basic 4 to 6" />
        <x-levels l-title="Junior High School" l-description="Basic 7 to 9" />
        <x-levels l-title="Senior High School" l-description="Basic 10 to 12" />
        <x-levels l-title="Post Secondary" l-description="Secondary +" />
        <x-levels l-title="All Subjects" l-description="A-Z of Resources" />
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
