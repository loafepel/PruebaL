<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>


    <nav class="navbar navbar-expand-lg bg-light ">
        <div class="container-fluid">
            <li class="navbar-brand" href="#">Pendientes</li>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('vista.index') }}">inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('tarea.index') }}">Tareas Ver</a>
                    </li>
                    {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('tarea.create')}}">Tareas Crear</a>
              </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cat.index') }}">Categorias Ver</a>
                    </li>
                    {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('cat.create')}}">Categorias Crear</a>
              </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prueba.index') }}">Municipios ver</a>
                    </li>
                    {{-- <li class="nav-item">
                <a class="nav-link" href="{{route('prueba.create')}}">Municipios crear</a>
              </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>


    <div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>

</html>
