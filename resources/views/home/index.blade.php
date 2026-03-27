@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <h1>Welcome to LeStackLabs</h1>

    <x-levels title="Primary" grades="Basic 4 to 6" />
    <x-levels title="Junior High School" grades="Basic 7 to 9" />
    <x-levels title="Senior High School" grades="Basic 10 to 12" />

@endsection
