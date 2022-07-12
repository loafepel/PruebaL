@extends('formato.app')
@section('content')
    <div class="card-body container col-6">
        
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Municipio</th>
                    <th>Tiempo</th>
                    <th colspan="2">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pruebas as $prueba)
                    <tr>
                        <td>{{ $prueba->id }}</td>
                        <td>{{ $prueba->municipio_id }}</td>
                        <td>{{ $prueba->tiempo }}</td>
                        <td>
                            <a href="{{ route('prueba.edit', $prueba)}}" class="btn btn-secondary btn-sm">Editar</a> 
                            
                        <td>
                            <form action="{{ route('prueba.destroy', $prueba) }}" method="POST">

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
                        <link rel="stylesheet"
                            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
                        <link
                            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
                            rel="stylesheet">
                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
                        <form action="{{ route('prueba.store') }}" method="POST" enctype="multipart/form-data">

                            <div class="container col-md-12">
                                @csrf


                                <div>

                                    <label for="municipio_id" class="form-label">Municipio</label>

                                    <select class="form-select form-select-sm" type="text" name="municipio_id"
                                        aria-label=".form-select-sm example">
                                        <option selected>Municipio</option>

                                        @foreach ($muns as $mun)
                                            <option value="{{ $mun->id }}">{{ $mun->nombre }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="">
                                    <h5>Tiempo</h5>
                                    <input class="date form-control" type="text" for="tiempo", name="tiempo"
                                        autocomplete="off">
                                </div>

                                <script type="text/javascript" class="container">
                                    $('.date').datepicker({
                                        format: 'yyyy-mm-dd'
                                    });
                                </script>

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
