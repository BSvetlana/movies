@extends('layouts.master')

@section('content')
<div class="row mt-4">
    <div class="col-9" style="padding-bottom: 40px">
        <h1>Genres</h1>
        
    

    <ul class="mt-5" style="list-style: none">
        @foreach($movies as $movie)
            <li>
                <h4>Film: {{ $movie->title }}</h4>
                <p>Genre: {{ $movie->genre }}</p>

            </li>
        @endforeach
    </ul>
</div>
<div class="col-3">
        @include('partials.sidebar')
</div>
</div>
@endsection
