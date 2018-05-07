<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;

class MoviesController extends Controller
{
    public function index(){

        $movies = Movie::all();
        $latest_movies = Movie::orderBy('created_at','desc')->take(5)->get();

        return view('movies.index',compact('movies','latest_movies'));
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
