<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>

      a {

        color: inherit;
        
      }

        .small-grey {

          font-size: 9px;
          color: grey;

        }

        .title-closer {

          margin: 0;

        }

    </style>

  </head>
  <body>

    <!-- Hier navigatie bovenaan plaatsen -->

    <div class="container">

      @yield('content')

    </div>

    @yield('footer')

  </body>
</html>
