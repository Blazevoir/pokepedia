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
    	<style type="text/css">
    	    table{
    	        background:white;
    	    }
    	</style>
    </head>
    <body  @isset(Auth::user()->tipo)style="background-image:url('../assets/img/{{Auth::user()->tipo}}.png');" @endisset else style="background-image:url('assets/img/usuario.png');">

       <section class="main">
           <div class="container h-100 separar">
@error('general')
       <div class="alert alert-danger">
            {{ $message }}
       </div>
    @enderror
<div class="row">

    <form action="{{ url('anadirPost') }}" method="post">
        @csrf
        <table class="table table-striped table-hover">

        <tr>
            <td>Pokemon ID</td>
            <td>
                <input type="text" name="pokemon_id" placeholder="Pokemon ID"value="{{ old('pokemon_id') }}"/><br>
                @error('pokemon_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </td>
        </tr>
        
        <tr>
        <td>Subject</td>
            <td>
                <input type="text" name="asunto" placeholder="Subject" value="{{ old('asunto') }}"/><br>
                @error('asunto')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        
        <tr>
            <td>Content</td>
            <td>        
                <input type="text" name="contenido" placeholder="Subject" value="{{ old('contenido') }}"/><br>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Add post"/>
            </td>
        </tr>
    </form>
    </table>
        <form action="{{ url('home') }}" method="get">
            <input type="submit" name="Volver" value="Go back" class="btn btn-info"/>
        </form>
      
    </div>
</div>
</section>
</body>
</html>