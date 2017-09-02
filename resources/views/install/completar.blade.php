@extends("../install.arch") @section("content")
<div class="row">
    <h1>Ya casi terminamos <strong></strong></h1>
    <hr>
</div>
@if(count($errors) > 0)
<div class="alert alert-danger">
<ul> 
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
@foreach($Usuario as $Usuari)
<div class="container">
       {!! Form::model(['method' => 'PATCH', 'route' =>['finalizar']]) !!}
        {{csrf_field()}}
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <br><br>
           <p>Estamos completando tu registro, porfavor indicanos los siguientes datos.</p>
           <input type="number" name="id" value="{{$Usuari->IdPer}}" style="display: none;" >
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="Nombres">Nombres</label>
                    <input type="text" id="Nombres" name="Nombres" value="{{old('Nombres')}}" placeholder="Nombres" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="correo">correo</label>
                    <input type="email" id="correo" name="correo" value="{{old('correo')}}" placeholder="correo" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="Telefono">Telefono</label>
                    <input type="text" id="Telefono" name="Telefono" value="{{old('Telefono')}}" placeholder="Telefono" required>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="cargo">Cargo</label>
                    <select name="cargo" id="cargo" required>
                @foreach($cargos as $cargo)
                <option value="{{$cargo->Cargo}}">{{$cargo->Nomcargo}}</option>
                @endforeach
            </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label>Usuario</label>
                    <p>{{$Usuari->user}}</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label>Identificador</label>
                    <p>{{$Usuari->Identificador}}</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label for="Estado">Estado</label>
                    <select name="Estado" id="Estado" required>
                @foreach($esta as $estado)
                <option value="{{$estado->idEstado}}">{{$estado->NombrEstado}}</option>
                @endforeach
            </select>
                    <p>{{$Usuari->IdEstado}}</p>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <label>ID</label>
                <p>{{$Usuari->IdPer}}</p>
                <input type="hidden" name="id" value="{{$Usuari->IdPer}}">
                </div>
            </div>
        </div>
            <input type="submit" name="sub" value="Terminar">
            <input type="reset" name="sub" value="Borrar">
    </div>
        {!! Form::close() !!}
        @endforeach
<hr> @endsection
