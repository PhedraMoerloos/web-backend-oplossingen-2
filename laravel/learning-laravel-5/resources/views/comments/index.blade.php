@extends('app')




@section('navbar-li')

    <li><a href="{{ action('ArticlesController@index') }}">New</a></li>
    <li class="active"><a href="#">Comments</a></li>
    <li><a href="{{ action('ArticlesController@createArticle') }}">Submit</a></li>

@stop





@section('content')






  <ul>



      @foreach( $comments as $comment )

        <li>

          <p class="small-grey">

            {{ $comment->user->username }} {{ \Carbon\Carbon::createFromTimeStamp(strtotime($comment->commented_at))->diffForHumans() }} |

            <a href="{{ action('CommentsController@showComments', [$comment->article_id]) }}">parent</a>

            on: {{ $comment->article->title }}


          </p>

          <p>
            {{ $comment->comment }}
          </p>

        </li>


      @endforeach

  </ul>



@stop
