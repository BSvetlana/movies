<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;


class CommentsController extends Controller
{
    public function store($movieId){

        $movie = Movie::find($movieId);

        $this->validate(request(),['content'=>'required','movie_id'=>'required']);

        $movie->comments()->create(request()->all());

        return redirect()->back();
    }
}
