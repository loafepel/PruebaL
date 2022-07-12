@extends('formato.app')
@section('content')
<div class="container">
    <div class="row" >
        @foreach ($vistas as $vista)
        <div class="col-sm-4" >
            <div class="card" style="width: 18rem;">
               
        
            
            <div class="card-body col-md-12" style="color: {{$vista->color}}">    
                <h5 class="card-title">{{$vista->nombre_tarea}}</h5>
                <p class="card-text">{{$vista->nombre_categoria}}</p>
                <p class="card-text" style="line-height: 1">{{$vista->descripcion}}</p>
                <p class="card-text" style="background: {{$vista->color}}">-</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>
</div>
@endsection