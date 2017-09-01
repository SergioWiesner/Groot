@extends("../layout.app") @section("content") 
<div class="row">
    <div class="col-md-12">
        <h1><strong>Ver</strong></h1>
        <hr>
    </div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        {!! Form::open(['route' => '/buscar', 'method' => 'get', 'role' => 'search']) !!} {{csrf_field()}}
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
            @foreach($usuario as $us)
            <div class="container">
               <div class="row">
                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                   <p>Id: {{$us->IdPer}}</p>
                   <input type="text" name="Nombres" value="{{$us->Nombres}}">
                   <input type="text" name="Nombres" value="{{$us->user}}">
                   <input type="text" name="Nombres" value="{{$us->correo}}">
                   </div>
                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                   <input type="number" name="Nombres" value="{{$us->Telefono}}">
                   <input type="number" name="Nombres" value="{{$us->Cargo}}">
                   <input type="number" name="Nombres" value="{{$us->Identificador}}">
                   <input type="number" name="Nombres" value="{{$us->Idestado}}">
                   </div>
               </div>
            </div>
            @endforeach
        </div>
        {!! Form::close() !!}
    </div>
    @endsection
