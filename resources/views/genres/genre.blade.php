@extends('layouts.master')

@section('content')

    <div class="mt-3">
        <h1>Genres</h1>
    </div>
    <ul style="list-style: none">
        @foreach($movies as $movie)
            <li>
                <h4>Film: {{ $movie->title }}</h4>
                <p>Genre: {{ $movie->genre }}</p>

            </li>
        @endforeach
    </ul>

@endsection