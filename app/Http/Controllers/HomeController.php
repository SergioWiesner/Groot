<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\usu;
use App\persona;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UseRequest;
use App\Http\Requests\finauser;

class HomeController extends Controller
{
     public function index(){
        return ;
    }
    
    public function store(UseRequest $request){
        DB::table('users')
                ->orderBy('IdPer', 'desc')
                ->get();
        DB::table('personas')
                ->orderBy('Id', 'desc')
                ->get();
    $user = new usu;
    $persona = new persona;     
    $fecha = new \DateTime();
    DB::table('personas')->insert(['Id' => 0]);
    DB::table('users')->insert(
    ['Identificador' => $request->get('Identificador'), 
     'user' => $request->get('User'), 
     'password' => bcrypt($request->get('Password')),
     'IdPer' => 0,
     'Idestado' => 0]);
        
    return redirect()->route('completarInfo', ["IdPersona" => $persona]);
    }
    
    
    
    public  function update(finauser $request){
        DB::table('users')
                ->orderBy('IdPer', 'desc')
                ->get();
        DB::table('personas')
                ->orderBy('Id', 'desc')
                ->get();
        $id = $request->get('id');
            DB::table('personas')
            ->where('id', $id)
            ->update(['Nombres' => $request->get('Nombres'), 
                      'correo' => $request->get('correo'),
                      'Telefono' => $request->get('Telefono'),
                      'Cargo' => $request->get('cargo')]);
        
    return redirect()->route("/buscar");
    }
    public  function show(){

}
}
