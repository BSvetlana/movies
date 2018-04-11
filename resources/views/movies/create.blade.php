@extends ('layouts.master');



@section('form')

    <h2>Create new movies</h2>

    <div>

        <form method="post" action="/movies/create">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" type="text" name="title" class="form-control">
                @include('partials.error-message',['fieldTitle'=>'title'])
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <input id="genre" type="text" name="genre" class="form-control">
                @include('partials.error-message',['fieldTitle'=>'genre'])
            </div>
            <div class="form-group">
                <label for="director">Director</label>
                <input id="director" type="text" name="director" class="form-control">

            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input id="year" type="date" name="year" class="form-control">
                @include('partials.error-message',['fieldTitle'=>'year'])
            </div>
            <div class="form-group">
                <label for="storyline">Story Line</label>
                <textarea id="storyline" name="storyline" class="form-control"></textarea>
                @include('partials.error-message',['fieldTitle'=>'storyline'])

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default">Send</button>
            </div>
        </form>
    </div>
@endsection