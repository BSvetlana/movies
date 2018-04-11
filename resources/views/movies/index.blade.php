@extends('layouts.master')

@section('content')

    <div class="mt-3">
        <h1>Movies</h1>
    </div>
    <ul>
        @foreach($movies as $movie)
            <li>
                <a href="{{route('single-movies',['id'=>$movie->id])}}">{{$movie->title}}</a>
                <p>{{$movie->storyline}}</p>
            </li>
        @endforeach
    </ul>

@endsection