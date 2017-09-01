@extends("../layout.app") @section("content")
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1>¿Vamos a agregar a un nuevo usuario?</h1>
        <hr>
        <h2>Empezemos ...</h2>
        <p>Idica los siguietes datos</p>
    </div>
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
    <div class="row">
        <div class="col-md-12">
            <form action="{{route('regist')}}" method="Post">
                {{csrf_field()}}

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
                <input type="submit" name="sub" value="Crear">
                <input type="reset" name="res" value="Borrar">
            </form>
        </div>
    </div>
</div>
@endsection
