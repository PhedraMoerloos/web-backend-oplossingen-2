@extends('app')


@section('navbar-li')

    <li><a href="{{ action('ArticlesController@index') }}">New</a></li>
    <li><a href="{{ action('CommentsController@index') }}">Comments</a></li>
    <li class="active"><a href="#">Submit</a></li>

@stop



@section('content')

  <h1>Write a new article:</h1>


  <!-- ipv naar deze pagina te gaan na submitten/posten, naar articles pagina gaan, zoals gezegd in routes.php  -->
    {!! Form::open(['url' => 'articles']) !!}


    {!! Form::hidden('user_id', 1) !!}


      <div class="form-group">

        <!-- name attribuut waarde, default value, extra attributen die je wilt toepassen zoals class -->
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}

      </div>



      <div class="form-group">

        <!-- name attribuut waarde, default value, extra attributen die je wilt toepassen zoals class -->
        {!! Form::label('url', 'Url:') !!}
        {!! Form::text('url', null, ['class' => 'form-control']) !!}

      </div>


      <p>or</p>



      <div class="form-group">

        <!-- name attribuut waarde, default value, extra attributen die je wilt toepassen zoals class -->
        {!! Form::label('text', 'Text:') !!}
        {!! Form::textarea('text', null, ['class' => 'form-control']) !!}

      </div>

      <!-- Dit wordt op een bepaald moment automatisch ingevuld-->



      <div class="form-group">

        {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}

      </div>


    {!! Form::close() !!}




    @if( $errors->any() )

        <ul class="alert alert-danger">

          @foreach( $errors->all() as $error )

              <li>{{ $error }}</li>

          @endforeach

        </ul>

    @endif



@stop
