<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Comment;

use App\Article;

class CommentsController extends Controller
{

  //heeft id meegekregen van article waar we de comments van moeten tonen
  public function index()
  {

    $comments = Comment::latest('commented_at')->get();

    $articles = Article::all();

    //view laden voor overzicht articles en de json array van alle articles meegeven
    return view('comments.index', compact('articles', 'comments'));


  }



  public function showComments( $id_article )
  {

    $comments = Comment::all();

    $commentsArticle = Comment::where('id_article', $id_article)->get();


    //return $commentsArticle;
    return view('comments.showComments', compact('commentsArticle'));

  }

}
