
    <div class="mt-3" style="float: right; color:#00897B">
        <h4 class="text-center">Films</h4>

        @foreach($movies as $movie)
        <ul style="list-style: none;">

            <li><a href="{{ route('single-movies', ['id' => $movie->id]) }}" style="color:#00BFA5; text-decoration: none"">{{ $movie->title }}</a></li>

        </ul>
        @endforeach

    </div>

