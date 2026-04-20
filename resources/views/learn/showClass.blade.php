@extends('layouts.app')

@section('title', 'Learn & Revise')

@section('content')

    <section>

        <h1>{{$level->name}}</h1>




    </section>

    <section>

        <di>
            @foreach($classes as $class)
                <h3><a href="{{ route('learn.subjects', [$level, $class]) }}">
                        {{ $class->name }}
                    </a></h3>
                <p>{{$class->description}}</p>
            @endforeach
        </di>




    </section>





@endsection

