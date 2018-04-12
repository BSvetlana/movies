<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'genre', 'director','storyline','years'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function getGenre(){

        return self::find('genre')->get();
    }

}
