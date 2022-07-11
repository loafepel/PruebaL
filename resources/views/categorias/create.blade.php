@extends('formato.app')
@section('content')
<form action="{{ route('cat.store')}}" method="POST" enctype="multipart/form-data">
    
<div class="container col-md-4 col-md-offset-4">
    @csrf
    
    @if(session('success'))
    <h6 class="alert alert-su"> {{session('success')}} </h6>
    @endif

   @if($errors->any())
   <div class="alert alert-danger">
       @foreach($errors->all() as $error)
       - {{ $error }} <br>
       @endforeach
   </div>
   @endif
    <div class="mb-3 ">
        <label for="nombre_categoria" class="form-label">Titulo</label>
        <input type="text" name="nombre_categoria" class="form-control" placeholder="Categoria" value="{{old('nombre_categoria')}}">
    </div>
    
    <label for="color" class="form-label">Color picker</label>
    <input type="color" name="color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color" value="{{old('color')}}">

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <textarea class="form-control" name="descripcion" rows="3" placeholder="Ingrese descripcion" value="{{old('descripcion')}}"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</div>
</form>
@endsection