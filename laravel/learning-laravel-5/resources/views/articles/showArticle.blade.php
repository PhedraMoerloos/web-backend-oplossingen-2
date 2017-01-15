@extends('app')


@section('navbar-li')

    <li class="active"><a href="#">New</a></li>
    <li><a href="{{ action('CommentsController@index') }}">Comments</a></li>
    <li><a href="{{ action('ArticlesController@createArticle') }}">Submit</a></li>

@stop




@section('content')


  <h1>{{ $article->title }}</h1>

  <div class="body">

    {{ $article->text }}

  </div>



@stop
