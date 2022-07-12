@extends('formato.app')
@section('content')
    <form action="{{ route('tarea.store') }}" method="POST" enctype="multipart/form-data">

        <div class="container col-md-4 col-md-offset-4">
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
            <div class="mb-3 ">
                <label for="nombre_tarea" class="form-label">Titulo</label>
                <input type="text" name="nombre_tarea" class="form-control" placeholder="Tarea"
                    value="{{ old('nombre_tarea') }}">
            </div>
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" placeholder="Descripcion"
                value="{{ old('Descripcion') }}">
            <div class="mb-3">

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
@endsection
