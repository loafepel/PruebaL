@extends('formato.app')
@section('content')
@foreach ($vistas as $vista)
<div class="card container" style="width: 18rem;">
    <!--<img src="..." class="card-img-top" alt="...">-->
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    
    <div class="card-body">
        
           
        <h5 class="card-title">{{$vista->nombre_tarea}}</h5>
        <p class="card-text">{{$vista->nombre_categoria}}</p>
        <p class="card-text" style="line-height: 1">{{$vista->descripcion}}</p>
        
    </div>
   
  </div>
  @endforeach
@endsection