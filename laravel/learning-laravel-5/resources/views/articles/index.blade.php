@extends('app')




@section('content')

  <h1>Articles</h1>



  <ol>


      <!-- kunnen aan de articles variabele van eloquent nu -> json overzicht van artikels in database-->
      @foreach( $articles as $article )

        <li>

          <p class="title-closer">
            <!-- kan ook op andere manieren, maar hier ga je dan gwn naar controller en voer je de view uit met de juiste id meegegeven om te tonen -->
            <a href="

            @if($article->url != "")

              {{ $article->url }}

            @else

              {{ action('ArticlesController@showArticle', [$article->id]) }}

            @endif

            " target="_blank">{{ $article->title }}</a>
          </p>




          <p class="small-grey">

            points by {{ $article->made_by }} {{ \Carbon\Carbon::createFromTimeStamp(strtotime($article->published_at))->diffForHumans() }} |

            <a href="{{ action('ArticlesController@hideArticle', [$article->id]) }}">hide</a>
             |

            <a href="{{ action('CommentsController@index', [$article->id]) }}">

              @if(count($comments) == 1)

                1 comment</a>

              @else

                {{ count($comments) }} comments</a>

              @endif

          </p>

        </li>


      @endforeach

  </ol>



@stop
