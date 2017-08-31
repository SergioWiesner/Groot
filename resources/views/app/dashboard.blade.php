@extends("../layout.app") @section("content") @if(count($errors) > 0)
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<div class="row">
    <div class="col-md-12">
    <h1>Escritorio</h1>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <table class="buscar">
            <tr>
                <th><h3>Id General</h3></th>
                <th><h3>Id persona</h3></th>
                <th><h3>user</h3></th>
                <th><h3>Estado</h3></th>
                <th><h3>Nombres</h3></th>
                <th><h3>Correo</h3></th>
                <th><h3>Telefono</h3></th>
                <th><h3>Cargo</h3></th>
            </tr>
            @foreach( $use as $usuario)
            <tr>
                <td> <p>{{$usuario->Identificador}}</p></td>
                <td> <p>{{$usuario->IdPer}}</p></td>
                <td> <p>{{$usuario->user}}</p></td>
                <td> <p>{{ $usuario->Idestado }}</p></td>
                <td> <p>{{$usuario->IdPer}}</p></td>
                <td> <p>{{$usuario->user}}</p></td>
                <td> <p>{{$usuario->Identificador}}</p></td>
                <td> <p>{{$usuario->Identificador}}</p></td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
 @endsection
