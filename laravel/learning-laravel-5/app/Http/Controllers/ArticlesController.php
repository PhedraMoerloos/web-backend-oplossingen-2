<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use Carbon\Carbon;

use App\Article;

class ArticlesController extends Controller
{
    public function index() {

      //articles erin gezet via eloquent

      $articles = Article::all();
      //= ok maar we willen de laatst toegevoegde als eerste tonen

      //$articles = \App\Article::latest('published_at')->get();

      //view laden voor overzicht articles en de json array van alle articles meegeven
      return view('articles.index', compact('articles'));

    }


    public function showArticle( $id )
    {

      $article = \App\Article::findorFail( $id );

      //als id niet bestaat die je opvraagt --> view met oops something went wrong fzo tonen --> findorFail

      return view('articles.showArticle', compact('article'));

    }



    public function createArticle()
    {

      return view('articles.createArticle');

    }



    public function storeArticle()
    {

        $input = Request::all();
        //als je enkel de title zou willen bv --> Request::get('title');

        //je moet alles invullen als je een nieuw article maakt --> title, body, published_at, anders geeft error
        $input['published_at'] = Carbon::now();

        //nieuw article maken en saven naar de database
        Article::create($input);

        //hier gaat hij door alle articles in database en ze tonen
        return redirect('articles');;

    }


}
