<ul>
    @foreach($movies as $movie)
        <li>
            <a href="{{route('single-movies',['id'=>$movie->id])}}">{{$movie->title}}</a>
            <p>{{$movie->storyline}}</p>
        </li>
    @endforeach
</ul>