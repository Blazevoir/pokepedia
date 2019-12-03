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
    	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    	<style type="text/css">
    	    
    	</style>
    </head>
<body  @isset(Auth::user()->tipo)style="background-image:url('assets/img/{{Auth::user()->tipo}}.png');" @endisset else style="background-image:url('assets/img/usuario.png');">
<div class="container">
    @foreach ($posts as $post)
                  <div class="well">
                      <div class="media">
                      	<a class="pull-left" href="#">
                    		<img class="media-object" src="assets/img/pokeball.png" width=50px>
                  		</a>
                  		<div class="media-body">
                    	<h4 class="media-heading">{{$post->asunto}}</h4>
                @isset(Auth::user()->tipo)
                     <p class="text-right">By {{ $post->name }}</p>
                @endisset
                          <p>{{$post->contenido}}</p>
                           </div>
                        </div>
                  </div>
          @endforeach
        </div>
    <div class="botones">
        <form action="{{ url('home') }}" method="get">
            <input type="submit" name="Volver" value="Go back" class="btn btn-info back"/>
        </form>
    @auth
    <form action="{{ url('post/create') }}" method="get">
        <input type="submit" name="AddPost" value="Add Post" class="btn btn-info back"/>
    </form>
    @endauth
    </div>
        <div class="links">
        {{$posts->links()}}
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="{{ url("assets/js/jquery-3.3.1.slim.min.js")}}"><\/script>')</script>
</body>

</html>