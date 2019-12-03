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
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    	<style type="text/css">
    	    
    	</style>
    </head>
    <body  @isset(Auth::user()->tipo)style="background-image:url('assets/img/{{Auth::user()->tipo}}.png');" @endisset else style="background-image:url('assets/img/usuario.png');">

       <section class="main">
		<div class="widget-content container-pokedex">
             <table class="table table-striped table-bordered">
                 <thead>
					<tr>
						<th>ID Pokemon</th>
						<th>Name</th>
						<th>Type</th>
						<th>Weight (Kg)</th>
						<th>Height (Meters)</th>
						<th>Photo</th>
						<th>Ability</th>
					</tr>
				</thead>
        @foreach ($pokemons as $pokemon)
            <tr>
                <td>{{$pokemon->id}}</td>
                <td>{{$pokemon->nombre}}</td>
                <td>{{$pokemon->tipo}}</td>
                <td>{{$pokemon->peso}}</td>
                <td>{{$pokemon->estatura}}</td>
                <td><img src="{{\Request::url()}}/../assets/img/{{ ($pokemon->foto) }}" alt="{{ $pokemon->nombre }}" width=40px></img></td>
                <td>{{$pokemon->ataque}}</td>
                <td class="td-actions">			
                <form action="{{ url('pokedex/' . $pokemon->id)}}" method="get" >
                    <input type="submit" value="Watch" class="btn btn-info"/>
                </form>
                @isset(Auth::user()->tipo)
                    @if(Auth::user()->tipo == 'admin')
                         <form action="{{ url('pokedex/delete/' . $pokemon->id)}}" method="get" >
                            <input type="submit" value="Delete" class="btn btn-danger"/>
                        </form>
                    @endif
                @endisset
    			</td>
            </tr>
            
        @endforeach
        

    </table>
    </div>
    <div class="botones">
        <form action="{{ url('home') }}" method="get">
            <input type="submit" name="Volver" value="Go back" class="btn btn-info back"/>
        </form>
    @auth
    <form action="{{ url('pokedex/create') }}" method="get">
        <input type="submit" name="Add" value="Add Pokemon" class="btn btn-info back"/>
    </form>
    @endauth
        </div>
    <div class="links">
        {{$pokemons->links()}}
    </div>
       </section>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="{{ url("assets/js/jquery-3.3.1.slim.min.js")}}"><\/script>')</script>

    </body>
</html>