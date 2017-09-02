<?php

namespace App\Http\Controllers;
use App\usu;
use App\cargo;
use App\persona;
use App\estado;
use App\busqueda;
use Illuminate\Http\Request;
use App\Http\Requests\UseRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\funcionesayudas;

class LogController extends Controller
{
    public function index(){
        return view();
    }
    
    public  function store(UseRequest $request){
    $Id = funcionesayudas::getId();
    $reg = [ 'Identificador' => $request->get('Identificador'), 'User' => $request->get('User'), 'Password' => bcrypt($request->get('Password')), 'Id' => $Id+1];
    $useo = funcionesayudas::PrimerRegistro($reg);
    $datos = busqueda::busquedaUsPer($Id+1);
    $cargos = cargo::all();
    $estado = estado::all();
    return view('log.completar', ["Usuario" => $datos])->with("cargos", $cargos)->with('esta', $estado);
    }
    
    public  function create(){
        $id=0;
        $cargos = cargo::all();
        $useo = funcionesayudas::getId($id);
        $users = DB::table('users')
                ->where('IdPer', $useo)
                ->get();
        $personas = DB::table('personas')
                ->where('Id', $useo)
                ->get();
     return View("log.completar", ["perso"=>$personas])->with("Usuario", $users)->with("cargo", $cargos);
    }
    
    public  function show(){
    return View("app.dashboard");
}
}
