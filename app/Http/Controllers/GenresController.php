<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;

class GenresController extends Controller
{
    public function show($genre){

        $movies = Movie::where('genre',$genre)->get();
        
        $latest_movies = Movie::orderBy('created_at','desc')->take(5)->get();


        return view('genres.genre',compact('movies','latest_movies'));

    }
}
