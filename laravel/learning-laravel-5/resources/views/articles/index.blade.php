@extends('app')




@section('navbar-li')

    <li class="active"><a href="#">New</a></li>
    <li><a href="{{ action('CommentsController@index') }}">Comments</a></li>
    <li><a href="{{ action('ArticlesController@createArticle') }}">Submit</a></li>

@stop





@section('content')




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

            " target="_blank">{{ $article->title }} <span class="small-grey">({{ $article->url }})</span></a>
          </p>




          <p class="small-grey">

            points by {{ $article->made_by }} {{ \Carbon\Carbon::createFromTimeStamp(strtotime($article->published_at))->diffForHumans() }} |

            <a href="{{ action('ArticlesController@hideArticle', [$article->id]) }}">hide</a>
             |

            <a href="{{ action('CommentsController@showComments', [$article->id]) }}">

              @if(count($comments->where('id_article', $article->id)) == 1)

                1 comment</a>

              @else

                {{ count($comments->where('id_article', $article->id)) }} comments</a>

              @endif

          </p>

        </li>


      @endforeach

  </ol>



@stop
