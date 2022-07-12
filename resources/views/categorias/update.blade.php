@extends('formato.app')
@section('content')
    <form action="{{ route('cat.update', $cat) }}" class="container col-md-4" method="POST" enctype="multipart/form-data">
        @method('PUT')

        @csrf
        @if (session('success'))
            <h6 class="alert alert-su"> {{ session('success') }} </h6>
        @endif

        @error('title')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
            <label for="nombre_categoria" class="form-label">Categoria</label>
            <input type="text" name="nombre_categoria" class="form-control" value="{{ $cat->nombre_categoria }}">

            <label for="color" class="form-label">Color</label>
            <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput"
                value="{{ $cat->color }}" title="Choose your color">

            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" value="{{ $cat->descripcion }}">


        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
@endsection
