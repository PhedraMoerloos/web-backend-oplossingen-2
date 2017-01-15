<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>





      p {

        font-size: 16px;

      }

      a {

        color: inherit;

      }

        .small-grey {

          font-size: 10px;
          color: grey;

        }

        .title-closer {

          margin: 0;

        }

    </style>

  </head>
  <body>

    <!-- Hier navigatie bovenaan plaatsen -->
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ action('ArticlesController@index') }}">Hacker news</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        @yield('navbar-li')

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <div class="container">

      @yield('content')

    </div>



    @yield('footer')

  </body>
</html>
