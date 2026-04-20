@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1>Welcome to LeStackLabs</h1>


    <section>

        <div>
            @foreach($levels as $level)
                <di>
                    <h2>{{$level->name}}</h2>
                    <p>{{$level->description}}</p>
                </di>
            @endforeach
                <di>
                    <h2>Teachers</h2>
                    <p>A-Z Teachers Resources</p>
                </di>

        </div>

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

{{--        <a href="{{ route('about') }}">Read more</a>--}}


    </section>





@endsection
