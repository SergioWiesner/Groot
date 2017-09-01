@extends("../layout.app") @section("content") 
<div class="row">
    <div class="col-md-12">
        <h1><strong>Buscar</strong></h1>
        <hr>
    </div>
</div>
<div class="row" onload="busq('')">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        {!! Form::open(['route' => '/buscar', 'method' => 'get', 'role' => 'search']) !!} {{csrf_field()}}
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <input type="text" name="busqueda" placeholder="Buscar">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <input type="submit" name="buscar" value="buscar">
                </div>

            </div>
            {!! Form::close() !!}
            <hr> @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="container">
                <table class="buscar">
                    <tr>
                        <th>
                            <h3>Id General</h3>
                        </th>
                        <th>
                            <h3>Usuario</h3>
                        </th>
                        <th>
                            <h3>Nombres</h3>
                        </th>
                        <th>
                            <h3>Cargo</h3>
                        </th>
                        <th>
                            <h3></h3>
                        </th>
                        <th>
                            <h3></h3>
                        </th>
                        <th>
                            <h3></h3>
                        </th>
                        <th>
                            <h3></h3>
                        </th>
                    </tr>
                    @foreach($res as $respuesta)
                    <tr>
                        <td>
                            <p>{{$respuesta->Identificador}}</p>
                        </td>
                        <td>
                            <p>{{$respuesta->user}}</p>
                        </td>
                        <td>
                            <p>{{$respuesta->Nombres}}</p>
                        </td>
                        <td>
                            <p>{{$respuesta->Cargo}}</p>
                        </td>
                        <td>
                            <p>
                                <buttom class="btn btn-primary"><a href="{{route('ver', ['idp' => $respuesta->IdPer])}}">ver</a></buttom>
                            </p>
                        </td>
                        <td>
                            <p>
                                <buttom class="btn btn-danger"><a href="{{route('ver', ['idp' => $respuesta->IdPer])}}">Eliminar</a></buttom>
                            </p>
                        </td>
                        <td>
                            <p></p>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
    @endsection
