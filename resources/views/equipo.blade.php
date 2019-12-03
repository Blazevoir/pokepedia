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
    <body>
        <section class="main" @isset(Auth::user()->tipo)style="background-image:url('assets/img/{{Auth::user()->tipo}}.png')" @endisset>
            <div class="menuwrap">
                <div class="homemenu">
                    <div class="homemenu-option pkedex"></div>
                    @auth
                    <div class="homemenu-option pokemon"></div>
                    <div class="homemenu-option equipo"></div>
                    @endauth
                    <div class="homemenu-option lgout"></div>
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

        
    </script>
</html>