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
                        <td>{{ $tarea->nombre_tarea }}</td>
                        <td>{{ $tarea->descripcion }}</td>
                        <td>{{ $tarea->categoria_id }}</td>
                        <td>
                            {{-- <a href="{{ route('tarea.edit', $tarea)}}" class="btn btn-secondary btn-sm">Editar</a> --}}
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Editar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('tarea.update', $tarea) }}" class="container col-md-4"
                                                method="POST" enctype="multipart/form-data">
                                                @method('PUT')

                                                @csrf
                                                @if (session('success'))
                                                    <h6 class="alert alert-su"> {{ session('success') }} </h6>
                                                @endif

                                                @error('title')
                                                    <h6 class="alert alert-danger">{{ $message }}</h6>
                                                @enderror

                                                <div class="mb-3">
                                                    <label for="nombre_tarea" class="form-label">Tarea</label>
                                                    <input type="text" name="nombre_tarea" class="form-control"
                                                        value="{{ $tarea->nombre_tarea }}">

                                                    <label for="descripcion" class="form-label">Descripcion</label>
                                                    <input type="text" name="descripcion" class="form-control"
                                                        value="{{ $tarea->descripcion }}">

                                                    <!--<label for="categoria_id" class="form-label">categoria_id</label>
                              <input type="text" name="categoria_id" class="form-control" value="{{ $tarea->categoria_id }}">-->

                                                    <label for="categoria_id" class="form-label">Categoria</label>
                                                    <select class="form-select form-select-sm" type="text"
                                                        name="categoria_id" aria-label=".form-select-sm example">
                                                        <option selected>Categoria</option>

                                                        @foreach ($cats as $cat)
                                                            <option value="{{ $cat->id }}">
                                                                {{ $cat->nombre_categoria }}</option>
                                                        @endforeach




                                                    </select>


                                                </div>
                                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
    </div>
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

                            @if (session('success'))
                                <h6 class="alert alert-su"> {{ session('success') }} </h6>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        - {{ $error }} <br>
                                    @endforeach
                                </div>
                            @endif
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
