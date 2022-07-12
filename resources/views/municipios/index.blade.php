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
                <th>id</th>
                <th>Municipio</th>
                <th>Tiempo</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pruebas as $prueba)
            <tr>
                <td>{{$prueba->id}}</td>
                <td>{{$prueba->municipio_id}}</td>
                <td>{{$prueba->tiempo}}</td>
                <td>
                    <a href="{{ route('prueba.edit', $prueba)}}" class="btn btn-secondary btn-sm">Editar</a>
                </td>
                <td>
                    <form action="{{route('prueba.destroy', $prueba)}}" method="POST">
                    
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
