@extends('layouts.master')

@section('title')

    {{ $movie->title }}
    @endsection

@section('content')



    <div class="mt-6">
        <h1>{{ $movie->title }}</h1>
    </div>
    <a href="{{route('single-movies',['id'=>$movie->id])}}">{{ $movie->genre }} </a>
    <p><b> {{ $movie->director }}</b> <i>Years: </i>{{$movie->years}}</p>
    <p>{{ $movie-> storyline }}</p>
    <hr>


    <h4>Comments</h4>
    <ul class="list-unstyled">
        @foreach($movie->comments as $comment)
            <li>{{ $comment->content}}</li>
            <hr>
        @endforeach
    </ul>



    <form method="post" action="{{ route('comments-add',['movie_id'=>$movie->id]) }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="content">Add comment</label>
            <textarea id="content" name="content" class="form-control"></textarea>
            @include('partials.error-message',['fieldTitle'=>'content'])
        </div>
        <div class="form-group">
            <label for="movie_id">Movie Id</label>
            <input id="movie_id" type="text" name="movie_id" class="form-control">
            @include('partials.error-message',['fieldTitle'=>'movie_id'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Send</button>
        </div>
    </form>

@endsection