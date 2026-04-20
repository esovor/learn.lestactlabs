@extends('layouts.app')

@section('title', 'Learn & Revise')

@section('content')

    <section>


    </section>

    <section>

        @foreach($subjects as $subject)
            <h3>{{$subject->name}}</h3>

        @endforeach



    </section>





@endsection

