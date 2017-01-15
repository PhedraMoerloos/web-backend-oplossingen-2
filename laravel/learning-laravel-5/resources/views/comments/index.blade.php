@extends('app')




@section('navbar-li')

    <li><a href="{{ action('ArticlesController@index') }}">New</a></li>
    <li class="active"><a href="#">Comments</a></li>
    <li><a href="{{ action('ArticlesController@createArticle') }}">Submit</a></li>

@stop





@section('content')




  <ul>


      <!-- kunnen aan de articles variabele van eloquent nu -> json overzicht van artikels in database-->
      @foreach( $comments as $comment )

        <li>

          <p class="small-grey">

            <a href="{{ action('CommentsController@showComments', [$comment->id_article]) }}">parent</a>
            | on:
            <a href="{{ action('CommentsController@showComments', [$comment->id_article]) }}">{{ $articles->where('id', $comment->id_article) }}</a>

          </p>

          <p>
            {{ $comment->comment }}
          </p>

        </li>


      @endforeach

  </ul>



@stop
