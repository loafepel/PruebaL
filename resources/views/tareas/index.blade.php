@extends('formato.app')
@section('content')

    <div class="card-body container col-6">
       

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
                        <td>{{ $tarea->nombre_tarea }}</td>
                        <td>{{ $tarea->descripcion }}</td>
                        <td>{{ $tarea->categoria_id }}</td>
                        <td>
                            <a href="{{ route('tarea.edit', $tarea)}}" class="btn btn-secondary btn-sm">Editar</a>
                         
    </td>
    <td>
        <form action="{{ route('tarea.destroy', $tarea) }}" method="POST">

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
                    <form action="{{ route('tarea.store') }}" method="POST" enctype="multipart/form-data">

                        <div class="container col-md-12">
                            @csrf

                           
                            <div>
                                <label for="nombre_tarea" class="form-label">Titulo</label>
                                <input type="text" name="nombre_tarea" class="form-control" placeholder="Tarea"
                                    value="{{ old('nombre_tarea') }}">
                            </div>
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion"
                                value="{{ old('Descripcion') }}">
                            <div>

                                <label for="categoria_id" class="form-label">Categoria</label>

                                <select class="form-select form-select-sm" type="text" name="categoria_id"
                                    aria-label=".form-select-sm example">
                                    <option selected>Categoria</option>

                                    @foreach ($cats as $cat)
                                        <option value="{{ $cat->id }}">{{ $cat->nombre_categoria }}</option>
                                    @endforeach




                                </select>


                                <!--<label for="categoria_id" class="form-label">Categoria</label>
                            <input type="text" name="categoria_id" class="form-control" placeholder="Categoria" value="{{ old('categoria_id') }}">-->
                            </div>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
