<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;

class MoviesController extends Controller
{
    public function index(){

        $movies = Movie::all();
        return view('movies.index',compact(['movies']));
    }

    public function show($id){

        $movie = Movie::with('comments')->find($id);


        return view('movies.show',compact(['movie']));
    }

    public function create(){

        return view('movies.create');
    }

    public function store(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'genre' => 'required',
            'years' => 'date',
            'storyline' => 'required | max:1000'
        ]);

        Movie::create($request->all());

        return redirect()->route('all-movies');
    }
}
