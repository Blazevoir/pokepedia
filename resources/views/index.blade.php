<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>WikiBattleDex</title>
        <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet"> 
        <link href="{{ url('assets/css/poke.css')}}" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="{{url('assets/img/favicon.ico')}}" />
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
    </head>
    <body style="background-image:url('assets/img/usuario.png');" @isset(Auth::user()->tipo)style="background-image:url('assets/img/{{Auth::user()->tipo}}.png');" @endisset>
       <section class="main">
           <div class="container h-100">
                 @yield('content')
        	</div>
       </section>
    </body>
</html>