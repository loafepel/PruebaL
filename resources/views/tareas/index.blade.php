@extends('formato.app')
@section('content')

<div class="card-body container col-6">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Tarea</th>
                <th>Descripcion</th>
                <th>Categoria id</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tareas as $tarea)
            <tr>
                <td>{{$tarea->nombre_tarea}}</td>
                <td>{{$tarea->descripcion}}</td>
                <td>{{$tarea->categoria_id}}</td>
                <td>
                    <a href="{{ route('tarea.edit', $tarea)}}" class="btn btn-secondary btn-sm">Editar</a>
                </td>
                <td>
                    <form action="{{route('tarea.destroy', $tarea)}}" method="POST">
                    
                    @method('DELETE')
                    @csrf
                    <!--<button class="btn btn-danger btn-sm">eliminar</button>-->
                    <input type="submit"
                    value="Eliminar" class="btn btn-sm btn-danger"
                    onclick="return confirm('¿Desea eliminar...?')">
                    </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection