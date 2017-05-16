<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/bulma/css/bulma.css">


    </head>
    <body>
      <nav class="nav">
        <div class="nav-center">
          <a href="/summonerpage" class="nav-item">summoner page</a>
          <a href="/championpage" class="nav-item">champion page</a>
        </div>
      </nav>

      @include('summoner_search')

      @yield('content')

    </body>
</html>
