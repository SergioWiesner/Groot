@extends("../layout.app") @section("content") @foreach($usuario as $us)
<div class="row">
    <div class="col-md-12">
        <h1>Estos son los detalles del usuario <strong>{{$us->user}}</strong></h1>
        <hr>
        <h4>Si quieres actualizar los datos tan solo edita los campos con la información a actualizar, <strong>si no tan solo oprime el boton atras</strong>.</h4>
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <form action="{{route('actualizar')}}" method="post">
        {{csrf_field()}}
        <div class="container">
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
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="Nombres">Nombres</label>
                        <input type="text" name="Nombres" id="Nombres" value="{{$us->Nombres}}">
                        <label for="user">Usuario</label>
                        <input type="text" name="user" id="user" value="{{$us->user}}">
                        <label for="correo">Correo</label>
                        <input type="email" name="correo" id="correo" value="{{$us->correo}}">
                        <input type="number" name="IdPer" id="IdPer" value="{{$us->IdPer}}" style="display: none;">
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <label for="Telefono">Telefono</label>
                        <input type="number" name="Telefono" id="Telefono" value="{{$us->Telefono}}">
                        <label for="cargo">Cargos</label>
                        <select name="Cargo" id="cargo">
                       @foreach($cargos as $cargo)
                       <option value="{{$cargo->Cargo}}">{{$cargo->Nomcargo}}</option>
                       @endforeach
                   </select>
                        <label for="Identificador">Identificador</label>
                        <input type="number" name="Identificador" id="Identificador" value="{{$us->Identificador}}">
                        <label for="Idestado">Estado</label>
                        <select name="Idestado" id="Idestado">
                       @foreach($esta as $estado)
                       <option value="{{$estado->idEstado}}">{{$estado->NombrEstado}}</option>
                       @endforeach
                   </select>

                        <input type="text" name="IdPer" id="Idestado" value="{{$us->IdPer}}" style="display: none;">
                    </div>
                </div>
                <input type="submit" value="Actualizar">
                <a href="{{Route('/buscar')}}" class="reset">Atrás</a>
            </div>
        </div>
    </form>
    @endforeach
</div>
@endsection
