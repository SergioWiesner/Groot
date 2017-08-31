<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gestor</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css')}}">
    <script src="https://use.fontawesome.com/64ee991afa.js"></script>

</head>

<body>
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sidebar">
            <h2>Menú</h2>
            <nav>
                <ul class="menu" id="menu">
                    <li>
                        <h4><i class="fa fa-users icon" aria-hidden="true"></i><a href="#" class="lin">Usuarios</a></h4>
                        <ul class="subca">
                            <li><a href="{{Route('/log')}}">Agregar</a></li>
                            <li><a href="{{Route('/log')}}">Buscar</a></li>
                            <li><a href="{{Route('/log')}}">Editar</a></li>
                            <li><a href="{{Route('/log')}}">Eliminar</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><i class="fa fa-folder-open-o icon" aria-hidden="true"></i><a href="#" class="lin"> Proyectos </a></h4>
                        <ul class="subca" id="subcat">
                            <li><a href="{{Route('/log')}}">Agregar</a></li>
                            <li><a href="{{Route('/log')}}">Buscar</a></li>
                            <li><a href="{{Route('/log')}}">Editar</a></li>
                            <li><a href="{{Route('/log')}}">Eliminar</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><i class="fa fa-user icon" aria-hidden="true"></i><a href="#" class="lin">Clientes</a></h4>
                        <ul class="subca" id="subcat">
                            <li><a href="{{Route('/log')}}">Agregar</a></li>
                            <li><a href="{{Route('/log')}}">Buscar</a></li>
                            <li><a href="{{Route('/log')}}">Editar</a></li>
                            <li><a href="{{Route('/log')}}">Eliminar</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><i class="fa fa-book icon" aria-hidden="true"></i><a href="#" class="lin">Tareas</a></h4>
                        <ul class="subca" id="subcat">
                            <li><a href="{{Route('/log')}}">Agregar</a></li>
                            <li><a href="{{Route('/log')}}">Buscar</a></li>
                            <li><a href="{{Route('/log')}}">Editar</a></li>
                            <li><a href="{{Route('/log')}}">Eliminar</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4><i class="fa fa-calendar-check-o icon" aria-hidden="true"></i><a href="#">Grantt</a></h4>
                    </li>
                    <li>
                        <h4><i class="fa fa-envelope-open-o icon" aria-hidden="true"></i><a href="#">Mensajes</a></h4>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <div class="container-fluid">
                @yield("content")
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    {{Html::script('js/main.js')}}

</body>

</html>
