@extends('formato.app')
@section('content')
    <form action="{{ route('tarea.update', $tarea) }}" class="container col-md-4" method="POST" enctype="multipart/form-data">
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
            <input type="text" name="nombre_tarea" class="form-control" value="{{ $tarea->nombre_tarea }}">

            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" value="{{ $tarea->descripcion }}">

            <!--<label for="categoria_id" class="form-label">categoria_id</label>
                  <input type="text" name="categoria_id" class="form-control" value="{{ $tarea->categoria_id }}">-->

            <label for="categoria_id" class="form-label">Categoria</label>
            <select class="form-select form-select-sm" type="text" name="categoria_id"
                aria-label=".form-select-sm example">
                <option selected>Categoria</option>

                @foreach ($cats as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->nombre_categoria }}</option>
                @endforeach




            </select>


        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
@endsection
