@extends('index2')

@section('content')

<div class="row">
    <div class="widget-content container-pokedex">
    <form action="{{ url('pokedex')}}" method="get" class="mostrarForm">
        <table class="table table-striped table-hover">
        <tr>
            <td>ID</td>
            <td>
               {{ ($pokemon->id) }}
            </td>
        </tr>
        <tr>
            <td>Nombre</td>
            <td>
               {{ ($pokemon->nombre) }}
            </td>
        </tr>
        <tr>
            <td>Type</td>
            <td>
               {{ ($pokemon->tipo) }}
            </td>
        </tr>
        <tr>
            <td>Weight</td>
            <td>
               {{ ($pokemon->peso) }}
            </td>
        </tr>
         <tr>
            <td>Height</td>
            <td>
               {{ ($pokemon->estatura) }}
            </td>
        </tr>
        <tr>
            <td>Ability</td>
            <td>
               {{ ($pokemon->ataque) }}
            </td>
        </tr>
        <tr>
            <td>
        <input type="submit" name="Volver" value="Volver" class="btn btn-info"/>
            </td>
        </tr>
    </form>
    <img src="{{\Request::url()}}/../../assets/img/{{ ($pokemon->foto) }}" width=500px alt="{{ $pokemon->nombre }}"></img>
    </table>
    </div>
</div>
<hr>

@stop