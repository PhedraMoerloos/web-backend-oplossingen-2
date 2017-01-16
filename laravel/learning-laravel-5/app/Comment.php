<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [

        'comment',
        'article_id',
        'commented_at',
        'user_id'

    ];


    //link user aan comment
    public function user()
    {

      //comment has 1 user
      return $this->belongsTo('App\User');

    }



    //link article aan comment
    public function article()
    {

      //comment belongs to 1 article
      return $this->belongsTo('App\Article');

    }

}
