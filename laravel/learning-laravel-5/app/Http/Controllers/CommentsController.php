<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Comment;

use App\Article;

use Carbon\Carbon;

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



  public function showComments( $article_id )
  {

    $article = Article::find($article_id);

    $commentsArticle = $article->comments()->get();

    return view('comments.showComments', compact('commentsArticle', 'article'));

  }




  public function storeComment(Requests\CreateCommentRequest $request)
  {

      $input = $request->all();

      $input['commented_at'] = Carbon::now();

      //nieuwe comment maken en saven naar de database
      Comment::create($input);

      return redirect('comments');



  }


}
