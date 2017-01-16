<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [

        'comment',
        'id_article',
        'commented_at',
        'id_user'

    ];


    //link user aan comment
    public function user()
    {

      //comment has 1 user
      return $this->belongsTo('App\User');

    }



    //link article aan comment
    public function user()
    {

      //comment belongs to 1 article
      return $this->belongsTo('App\Article');

    }

}
