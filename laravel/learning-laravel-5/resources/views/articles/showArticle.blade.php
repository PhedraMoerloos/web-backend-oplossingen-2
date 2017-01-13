@extends('app')



@section('content')


  <h1>{{ $article->title }}</h1>

  <div class="body">

    {{ $article->text }}

  </div>



@stop
