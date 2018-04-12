<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;

class GenresController extends Controller
{
    public function show($genre){

        $movies = Movie::where('genre','LIKE','%' . $genre . '%')->get();

        return view('genres.genre',compact(['movies']));
    }
}
