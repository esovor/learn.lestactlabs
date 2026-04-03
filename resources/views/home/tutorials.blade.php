@extends('layouts.app')

@section('title', 'Tutorials')

@section('content')

    <section>
        <h1>Welcome to our Tutorials</h1>

        <p>Develop your skills with tutorials in our blog. We cover everything from the
            classroom learning to advanced professional development.</p>

        <nav>
            <a href="#">Category 2</a>
            <span> | </span>
            <a href="#">Category 2</a>
            <span> | </span>
            <a href="#">Category 3</a>
            <span> | </span>
            <a href="#">Category 4</a>
            <span> | </span>
            <a href="#">Category 5</a>
            <span> | </span>
            <a href="#">Category 6</a>
        </nav>


    </section>

    <section>
        <h1>Latest Tutorials</h1>

        <div>
           <x-tuturial t-category="Category 1" t-heading="Heading 1" t-decribtion="Heading 1 provides the "/>
            <x-tuturial t-category="Category 2" t-heading="Heading 2" t-decribtion="Heading 2 provides the "/>
            <x-tuturial t-category="Category 3" t-heading="Heading 3" t-decribtion="Heading 3 provides the "/>
            <x-tuturial t-category="Category 4" t-heading="Heading 4" t-decribtion="Heading 4 provides the "/>
            <x-tuturial t-category="Category 5" t-heading="Heading 5" t-decribtion="Heading 5 provides the "/>
            <x-tuturial t-category="Category 6" t-heading="Heading 6" t-decribtion="Heading 6 provides the "/>
        </div>
    </section>







@endsection
