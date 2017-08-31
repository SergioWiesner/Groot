<?php

namespace App\Http\Controllers;
use App\usu;
use App\persona;
use App\cargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UseRequest;

class LogController extends Controller
{
    public function index(){
        return view("log.register");
    }
    public  function store(UseRequest $request){

    
    
    echo $useo = getId($id); 
        
        
    DB::table('personas')->insert(['Id' => $useo+1]);
    DB::table('users')->insert(
    ['Identificador' => $request->get('Identificador'), 
     'user' => $request->get('User'), 
     'password' => $request->get('Password'),
     'IdPer' => $useo+1,
     'Idestado' => 0]);

    return redirect()->Route('completarInfo');

    }
    function getId($id){
 $odontograma =  DB::table('users')->select('IdPer')->where('IdPer', DB::raw("(select max(`IdPer`) from users)"))->get();
     foreach ($odontograma as $o) {
				return $o->id;
    }
    }
    public  function create(){
     $cargos = cargo::all();
     $use = usu::all();
     $IdPersona = $use->last();
     return View("log.completar", ["perso"=>$IdPersona])->with("cargo", $cargos)->with("Usuario", $use);
    }
    public  function show(){
    $use = usu::all();
    $persona = persona::all();
    return View("app.dashboard")->with("use", $use)->with("persona", $persona);
}
}
