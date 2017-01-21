@extends('app')


@section('navbar-li')

  <li><a href="{{ url('/') }}">New</a></li>
  <li class="active"><a href="{{ url('/comments') }}">Comments</a></li>
  <li><a href="{{ url('/articles/create') }}">Submit</a></li>

@stop




@section('content')



    <h3>{{ $article->title }}</h3>



    @foreach( $commentsArticle as $commentArticle )

      <li>

        {{ $commentArticle->comment }}

        <p class="small-grey">

          {{ $commentArticle->user->name }} {{ \Carbon\Carbon::createFromTimeStamp(strtotime($commentArticle->commented_at))->diffForHumans() }}

        </p>

      </li>

    @endforeach


    <div class="form">


        {!! Form::open(['url' => 'comments']) !!}


        {!! Form::hidden('article_id', $article->id) !!}


          <div class="form-group">

            <!-- name attribuut waarde, default value, extra attributen die je wilt toepassen zoals class -->
            {!! Form::label('comment', 'Comment:') !!}
            {!! Form::text('comment', null, ['class' => 'form-control']) !!}

          </div>




          <div class="form-group">

            {!! Form::submit('Add Comment', ['class' => 'btn btn-primary form-control']) !!}

          </div>


        {!! Form::close() !!}

    </div>




        @if( $errors->any() )

            <ul class="alert alert-danger">

              @foreach( $errors->all() as $error )

                  <li>{{ $error }}</li>

              @endforeach

            </ul>

        @endif





@stop
