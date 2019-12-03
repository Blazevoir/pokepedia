
<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>WikiBattleDex</title>
        <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet"> 
        <link href="{{ url('assets/css/poke.css')}}" rel="stylesheet">
    	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    </head>
    <body  @isset(Auth::user()->tipo)style="background-image:url('assets/img/{{Auth::user()->tipo}}.png');" @endisset else style="background-image:url('assets/img/usuario.png');">
        <section class="main">
            <div class="menuwrap">
                @isset(Auth::user()->tipo)
                <h2 id="loggedAs">Logged as {{ Auth::User()->name }}</h2>
                @endisset
                <div class="homemenu">
                    <div class="homemenu-option pkedex"><span>Pokedex</span><img class="logos" src="assets/img/pokeball.png" width=80%></img></div>
                    @auth
                    <div class="homemenu-option posts"><span>Posts</span><img class="logos" src="assets/img/posts.png" width=80%></img></div>
                    @endauth
                    <div class="homemenu-option lgout"><span>Log out</span><img class="logos exit" src="assets/img/exit.png" width=80%></img></div>
                </div>
            </div>
            <div class="d-flex justify-content-center links" style="display:none !important">
				<form id='frm-logout' action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-info" value="Cerrar sesión"/>
                </form>
			</div>
        </section>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{ url("assets/js/jquery-3.3.1.slim.min.js")}}"><\/script>')</script>
    <script>
    /*global $*/
        $('.lgout').click(function(){
            $('#frm-logout').submit();
        });  
        $('.pkedex').click(function(){
            window.location.replace("pokedex");
        });
        $('.invitado').click(function(){
            alert('Para utilizar esta opcion debes de estar identificado');
        });
        $('.posts').click(function(){
            window.location.replace("post");
        });
        $('.equipo').click(function(){
            window.location.replace("equipo");
        });
        
    </script>
</html>