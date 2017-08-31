@extends("../layout.app") @section("content")
<div class="row">
    <h1>Ya casi terminamos</h1>
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
<div class="container">
       {!! Form::model($perso, ['method' => 'PATCH', 'route' =>['finalizar']]) !!}
        {{csrf_field()}}
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <h2>Estas llenando los datos de: <strong style="color:#e74c3c;">{{$Usuario->last()->user}}</strong></h2> <br>
           <p>Estamos completando tu registro, porfavor indicanos los siguientes datos.</p>
           <input type="number" name="id" value="{{$perso->IdPer}}" style="display: none;" >
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
                @foreach($cargo as $cargos)
                <option value="{{$cargos->Cargo}}">{{$cargos->Nomcargo}}</option>
                @endforeach
            </select>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label>Usuario</label>
                    <p>{{$Usuario->last()->user}}</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <label>Identificador</label>
                    <p>{{$Usuario->last()->Identificador}}</p>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <input type="hidden" name="id" value="{{$Usuario->last()->IdPer}}">
                </div>
            </div>
        </div>
            <input type="submit" name="sub" value="Terminar">
    </div>
        {!! Form::close() !!}
<hr> @endsection
