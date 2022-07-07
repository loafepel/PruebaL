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
                <th>Categoria</th>
                <th>Color</th>
                <th>Descripcion</th>
                <th colspan="2">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cats as $cat)
            <tr>
                <td>{{$cat->nombre_categoria}}</td>
                <td type="color">{{$cat->color}}</td>
                <td>{{$cat->descripcion}}</td>
                <td>
                    <a href="{{ route('cat.show', $cat)}}" class="btn btn-secondary btn-sm">Editar</a>
                </td>
                <td>
                    <form action="{{route('cat.destroy', $cat)}}" method="POST">
                    
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