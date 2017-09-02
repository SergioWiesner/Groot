<?php

namespace App\Http\Controllers;
use App\usu;
use App\persona;
use App\busqueda;
use Illuminate\Http\Request;
use App\Http\Requests\finauser;
use App\Http\Requests\UseRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ActualizarDatos;
use App\Http\Controllers\funcionesayudas;

class HomeController extends Controller
{
     public function index(ActualizarDatos $request){
         
         $datos = ['IdPer' => $request->get('IdPer'), 'user' => $request->get('user'), 'Idestado' => $request->get('Idestado'), 'Identificador' => $request->get('Identificador'), 'Nombres' => $request->get('Nombres'), 'Correo' => $request->get('correo'), 'Telefono' => $request->get('Telefono'), 'Cargo' => $request->get('Cargo')];
         $busque = busqueda::ActualizarTodosDatos($datos);
    }
    
    public function store(UseRequest $request){
        $reg = [ 'Identificador' => $request->get('Identificador'), 'User' => $request->get('User'), 'Password' => bcrypt($request->get('Password')), 'Id' => 0];
        $useo = funcionesayudas::PrimerRegistro($reg);
        if($useo){
            $id = 0;
            return redirect()->route('completarInfo');
        }else{
            return redirect()->route('/');
        }
    
    }
    
    public  function update(finauser $request){
    $datos = ['IdPer' => $request->get('IdPer'), 'user' => $request->get('user'), 'Idestado' => $request->get('Idestado'), 'Identificador' => $request->get('Identificador'), 'Nombres' => $request->get('Nombres'), 'Correo' => $request->get('correo'), 'Telefono' => $request->get('Telefono'), 'Cargo' => $request->get('Cargo')];
        
         $busque = busqueda::ActualizarTodosDatos($datos);    
    return redirect()->route("/buscar");
    }
    public  function show(){

}
}
