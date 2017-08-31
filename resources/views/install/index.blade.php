@extends("../layout.app") 
@section("content") 

@if(count($errors) > 0)
<div class="alert alert-danger">
<ul> 
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
<div class="row">
    <div class="col-md-12">
        {!! Form::open(['route' => 'regispr', 'method' => 'POST', 'autocomplete' => 'off']) !!}
           {{csrf_field()}}
           <div class="row"></div>
           <h1>Hola, Bienvenido a Groot</h1>
           <hr>
           <h4>Empezemos con la configuración, porfavor llena todos los datos</h4>
           <hr>
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <label for="Identificador">Identificador</label>
            <input type="number" id="Identificador" name="Identificador" value="{{old('Identificador')}}" placeholder="Identificador">
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <label for="User">User</label>
            <input type="text" id="User" name="User" value="{{old('User')}}" placeholder="User">
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <label for="Password">Password</label>
            <input type="Password" id="Password" name="Password" value="{{old('Password')}}" placeholder="Password">
            </div>
            <input type="submit" name="sub" value="Siguiente">
        {!! Form::close() !!}
        
    </div>
</div>

<hr> 
 
@endsection