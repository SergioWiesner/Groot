<?php

namespace App\Http\Controllers;
use App\usu;
use App\persona;
use App\cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UseRequest;
use App\Http\Controllers\funcionesayudas;

class LogController extends Controller
{
    public function index(){
        return view("log.register");
    }
    public  function store(UseRequest $request){
    $id=0;
    $useo = funcionesayudas::getId($id); 
    DB::table('personas')->insert(['Id' => $useo+1]);
    DB::table('users')->insert(
    ['Identificador' => $request->get('Identificador'), 
     'user' => $request->get('User'), 
     'password' => bcrypt($request->get('Password')),
     'IdPer' => $useo+1,
     'Idestado' => 0]);
    return redirect()->Route('completarInfo')->with("id", $id);

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
