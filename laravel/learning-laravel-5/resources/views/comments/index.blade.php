@extends('app')




@section('navbar-li')

  <li><a href="{{ url('/') }}">New</a></li>
  <li class="active"><a href="{{ url('/comments') }}">Comments</a></li>
  <li><a href="{{ url('/articles/create') }}">Submit</a></li>

@stop





@section('content')







  <ul>



      @foreach( $comments as $comment )

        <li>

          <p class="small-grey">

            {{ $comment->user->name }} {{ \Carbon\Carbon::createFromTimeStamp(strtotime($comment->commented_at))->diffForHumans() }} |

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
