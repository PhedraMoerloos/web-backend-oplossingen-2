<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Carbon\Carbon;

use App\Article;

use App\Comment;

class ArticlesController extends Controller
{
    public function index() {

      //articles erin gezet via eloquent

      $articles = Article::latest('published_at')->where('hide', '==', '0')->get();

      $comments = Comment::all();

      //view laden voor overzicht articles en de json array van alle articles meegeven
      return view('articles.index', compact('articles', 'comments'));

    }


    public function showArticle( $id )
    {

      $article = Article::findorFail( $id );

      //als id niet bestaat die je opvraagt --> view met oops something went wrong fzo tonen --> findorFail

      return view('articles.showArticle', compact('article'));

    }


    public function hideArticle( $id )
    {

      $article = Article::findorFail( $id );

      $article->update(['hide'=> 1]);



      $articles = Article::latest('published_at')->where('hide', '==', '0')->get();

      $comments = Comment::all();

      return view('articles.index', compact('articles', 'comments'));

    }






    public function createArticle()
    {

      return view('articles.createArticle');

    }



    public function storeArticle(Requests\CreateArticleRequest $request)
    {

        $input = $request->all();

        //je moet alles invullen als je een nieuw article maakt --> title, body, published_at, anders geeft error
        $input['published_at'] = Carbon::now();

        //nieuw article maken en saven naar de database
        Article::create($input);

        //hier gaat hij door alle articles in database en ze tonen
        return redirect('articles');



    }


}
