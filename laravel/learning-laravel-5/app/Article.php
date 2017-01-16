<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //deze mogen geMass assigned worden
    protected $fillable = [

        'title',
        'url',
        'text',
        'published_at',
        'hide',
        'id_user'

    ];


    //link user aan article
    public function user()
    {

      //article has 1 user
      return $this->belongsTo('App\User');

    }


    //link comments aan article
    public function comments()
    {

      //article has many comments
      return $this->hasMany('App\Comment');

    }


}
