<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Comment;

class CommentsController extends Controller
{

  //heeft id meegekregen van article waar we de comments van moeten tonen
  public function index( $id_article )
  {

    $comments = Comment::all();

    $commentsArticle = Comment::where('id_article', $id_article)->get();


    return $commentsArticle;

  }

}
