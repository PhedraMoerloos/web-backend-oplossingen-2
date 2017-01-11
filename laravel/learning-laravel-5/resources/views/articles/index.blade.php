@extends('app')

@section('content')

  <h1>Articles</h1>

  <!-- kunnen aan de articles variabele van eloquent nu -> json overzicht van artikels in database-->
  @foreach( $articles as $article )
    <article>

      <h2>
        <!-- kan ook op andere manieren, maar hier ga je dan gwn naar controller en voer je de view uit met de juiste id meegegeven om te tonen -->
        <a href="{{ action('ArticlesController@showArticle', [$article->id]) }}">{{ $article->title }}</a>
      </h2>

      <div class="body">

        {{ $article->body }}

      </div>

    </article>
  @endforeach


@stop
