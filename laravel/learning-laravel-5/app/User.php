<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    //link article aan user (naam functie: $article->naam)
    public function articles()
    {

      //user has many articles
      return $this->hasMany('App\Article');

    }


    //link comment aan user
    public function comments()
    {

      //user has many comments
      return $this->hasMany('App\Comment');

    }

}
