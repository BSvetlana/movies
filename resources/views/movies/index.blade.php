@extends('layouts.master')

@section('content')
<div class="row mt-4">
<div  class="col-9">
   
        <h1 class="text-center">Movies</h1>
         

        <ul style="list-style: none; padding-top: 50px">
        @foreach($movies as $movie)
            <li>
                <a style="color:#545151; text-decoration: none" href="{{route('single-movies',['id'=>$movie->id])}}"><h3>{{$movie->title}}</h3></a>
                
            </li>
            <li>
                <p class="mr-3">{{$movie->storyline}}</p>
            </li>
        @endforeach
    </ul>
</div> 
<div class="col-3 mt-5">
        @include('partials.sidebar', ['latest_movies' => $latest_movies])
</div>
</div>
@endsection