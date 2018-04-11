@extends('layouts.master')

@section('title')

    {{ $movie->title }}
    @endsection

@section('content')



    <div class="mt-6">
        <h1>{{ $movie->title }}</h1>
    </div>
    <p class="lead">{{ $movie->genre }} </p>
    <b> {{ $movie->director }}  <i>Year:</i>{{$movie->year}}</b>
    <p>{{ $movie-> storyline }}</p>


@endsection