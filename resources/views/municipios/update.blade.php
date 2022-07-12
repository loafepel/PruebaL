@extends('formato.app')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    <form action="{{ route('prueba.update', $prueba) }}" class="container col-md-4" method="POST"
        enctype="multipart/form-data">
        @method('PUT')

        @csrf
        @if (session('success'))
            <h6 class="alert alert-su"> {{ session('success') }} </h6>
        @endif

        @error('title')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">


            <label for="municipio_id" class="form-label">Municipio</label>

            <select class="form-select form-select-sm" type="text" name="municipio_id"
                aria-label=".form-select-sm example">
                <option selected>Municipio</option>

                @foreach ($muns as $mun)
                    <option value="{{ $mun->id }}">{{ $mun->nombre }}</option>
                @endforeach

            </select>


            <div class="">
                <h5>Tiempo</h5>
                <input class="date form-control" type="text" for="tiempo", name="tiempo" autocomplete="off"
                    value="{{ $prueba->tiempo }}">
            </div>

            <script type="text/javascript" class="container">
                $('.date').datepicker({
                    format: 'yyyy-mm-dd'
                });
            </script>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>
@endsection
