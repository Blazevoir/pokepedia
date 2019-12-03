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

    <form action="{{ url('anadir') }}" method="post" enctype="multipart/form-data" id="form">
        @csrf
        <table class="table table-striped table-hover">

        <tr>
            <td>Name</td>
            <td>
                <input type="text" name="nombre" placeholder="Name" minlength="2" maxlength="50" value="{{ old('nombre') }}"/><br>
                @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </td>
        </tr>
        
        <tr>
        <td>Type</td>
            <td>
                <input type="text" name="tipo" placeholder="Type" minlength="2" maxlength="100" value="{{ old('tipo') }}"/><br>
                @error('pè')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <tr>
            <td>Weight</td>
                <td>        
                    <input type="numeric" name="peso" placeholder="Weight" value="{{ old('peso') }}"/><br>
                    @error('peso')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </td>
        </tr>
        <tr>
            <td>Height</td>
            <td>
                <input type="numeric" name="estatura" placeholder="Height" value="{{ old('estatura') }}"/><br>
                @error('estatura')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>
                <input type="file" name="foto" id="form-input_file" class="form-input_file hide">
                <div id="drop-zone" class="drop-zone">
                    <p class="drop-zone-text">Drag the pokemon's photo here</p>
                </div>
            </td>
        </tr>
        <tr>
        <td>Ability</td>
            <td>
                <input type="text" name="ataque" placeholder="Ability" value="{{ old('ataque') }}"/><br>
                @error('ataque')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </td>
        </tr>
        <tr>
            <td>Add</td>
            <td>
            <input type="submit" value="Añadir"/>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{ url("assets/js/jquery-3.3.1.slim.min.js")}}"><\/script>')</script>

    </body>
    <script>
   
   
        const fileInput = document.getElementById('form-input_file'),
        dropZone = document.getElementById('drop-zone'),
        form = document.getElementById('form');
        
        dropZone.addEventListener('drop', (e) => {
              e.preventDefault() 
        })
        dropZone.addEventListener('click', () => fileInput.click());
        
        fileInput.addEventListener('change', (e) => {
        });
        
        // Animamos el paso por encima de la zona
        dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('drop-zone_active')
        });
        
        // Desaninamos la salida del paso por encima de la zona
        dropZone.addEventListener('dragleave', (e) => {
        e.preventDefault();
        dropZone.classList.remove('drop-zone_active')
        });
        
        // Aquí recogemos los elementos seleccionados
        // También le pasamos los elementos seleccionados al botón tradicional
        // para que el funcionamiento sea el mismo
        dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('drop-zone_active')
        // Con esta instrucción le pasamos los valores
        fileInput.files = e.dataTransfer.files;
        
        });
        
        // No dejamos subir los archivos si no hay archivo
        form.addEventListener('submit', (e) => {
        if (fileInput.files.length == 0) {
        e.preventDefault();
        }
        });
    </script>
</html>