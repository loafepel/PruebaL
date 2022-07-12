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
                        <td>{{ $cat->nombre_categoria }}</td>
                        <td type="color" style="color: {{ $cat->color }}">{{ $cat->color }}</td>
                        <td>{{ $cat->descripcion }}</td>

                        <td>
                            <a href="{{ route('cat.show', $cat)}}" class="btn btn-secondary btn-sm">Editar</a>
                     
    <td>
        <form action="{{ route('cat.destroy', $cat) }}" method="POST">

            @method('DELETE')
            @csrf
            <!--<button class="btn btn-danger btn-sm">eliminar</button>-->
            <input type="submit" value="Eliminar" class="btn btn-sm btn-danger"
                onclick="return confirm('¿Desea eliminar...?')">
        </form>
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Crear
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('cat.store') }}" method="POST" enctype="multipart/form-data">

                        <div class="col-md-12">
                            @csrf

                            
                            <div>
                                <label for="nombre_categoria" class="form-label">Titulo</label>
                                <input type="text" name="nombre_categoria" class="form-control" placeholder="Categoria"
                                    value="{{ old('nombre_categoria') }}">
                            </div>

                            <label for="color" class="form-label">Color picker</label>
                            <input type="color" name="color" class="form-control form-control-color"
                                id="exampleColorInput" value="#563d7c" title="Choose your color"
                                value="{{ old('color') }}">

                            <div>
                                <label for="descripcion" class="form-label">Descripcion</label>
                                <textarea class="form-control" name="descripcion" rows="3" placeholder="Ingrese descripcion"
                                    value="{{ old('descripcion') }}"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <!--<button type="button" class="btn btn-primary">Crear</button>-->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
