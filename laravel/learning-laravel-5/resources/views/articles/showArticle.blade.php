@extends('app')


@section('navbar-li')

  <li class="active"><a href="{{ url('/') }}">New</a></li>
  <li><a href="{{ url('/comments') }}">Comments</a></li>
  <li><a href="{{ url('/articles/create') }}">Submit</a></li>

@stop




@section('content')


  <h1>{{ $article->title }}</h1>

  <div class="body">

    {{ $article->text }}

  </div>



@stop
