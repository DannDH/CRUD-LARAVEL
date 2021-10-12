@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif

    <a href=" {{ url('actividad/create')}} "> Agregar actividad
    <table class="table table-light">

        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Actividad</th>
                <th>Texto</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($actividades as $actividad)
            <tr>
                <td>{{ $actividad->Nombre }}</td>
                <td>{{ $actividad->Actividad }}</td>
                <td>{{ $actividad->Texto }}</td>
                <td>
                <a href=" {{ url('/actividad/'.$actividad->id.'/edit') }}">
                    Editar
                </a>    

                |

                <form action="{{ url('/actividad/'.$actividad->id) }}" method="post" >
                @csrf
                {{ method_field('DELETE') }}
                <input type="submit" onclick="return confirm('¿Deseas borrar?')" value="Borrar">

                </form>

                </td>

            </tr> 
            @endforeach
        </tbody>
    
    </table>
</div>
@endsection