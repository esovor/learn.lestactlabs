@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1>Welcome to LeStackLabs</h1>


    <section class="homeLevel">
        <x-levels l-title="Primary" l-description="Basic 4 to 6" />
        <x-levels l-title="Junior High School" l-description="Basic 7 to 9" />
        <x-levels l-title="Senior High School" l-description="Basic 10 to 12" />
        <x-levels l-title="Teachers" l-description="Teaching Resources" />
    </section>

    <section>
        <h1>Learn anytime with Us</h1>
            <p>Begin your learning journey by exploring our free education learning resources.</p>

    </section>

    <section>
        <img src="{{ asset('favicon3.png') }}" alt="LeStackLabs Logo" height="60">
        <h1>About LeStackLabs Academy</h1>
        <p>We create meaningful learning experience for people at all levels.
            Our mission is to unlock the full potential of each learner in Ghana.</p>

        <a href="{{ route('about') }}">Read more</a>


    </section>





@endsection
