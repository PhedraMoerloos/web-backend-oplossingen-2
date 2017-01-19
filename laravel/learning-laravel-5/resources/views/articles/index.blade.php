@extends('app')




@section('navbar-li')

  <li class="active"><a href="{{ url('/') }}">New</a></li>
  <li><a href="{{ url('/comments') }}">Comments</a></li>
  <li><a href="{{ url('/articles/create') }}">Submit</a></li>

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

            points by {{ $article->user->name }} {{ \Carbon\Carbon::createFromTimeStamp(strtotime($article->published_at))->diffForHumans() }} |

            <a href="{{ action('ArticlesController@hideArticle', [$article->id]) }}">hide</a>
             |

            <a href="{{ action('CommentsController@showComments', [$article->id]) }}">

              @if(count($article->comments()->get()) == 1)

                1 comment</a>

              @else

                {{ count($article->comments()->get()) }} comments</a>

              @endif

          </p>

        </li>


      @endforeach

  </ol>



@stop
