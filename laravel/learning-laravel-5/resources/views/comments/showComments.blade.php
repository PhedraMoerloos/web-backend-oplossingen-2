@extends('app')


@section('navbar-li')

    <li><a href="{{ action('ArticlesController@index') }}">New</a></li>
    <li class="active"><a href="{{ action('CommentsController@index') }}">Comments</a></li>
    <li><a href="{{ action('ArticlesController@createArticle') }}">Submit</a></li>

@stop




@section('content')


  <!-- naam artikel waarvoor dit de comments zijn-->

  <!-- form om comment toe te voegen op artikel -->

    <h3>{{ $article->title }}</h3>



    @foreach( $commentsArticle as $commentArticle )

      <li>

        {{ $commentArticle->comment }}

      </li>

    @endforeach





@stop
