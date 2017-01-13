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
        'made_by'

    ];

}
