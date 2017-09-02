<?php
use App\usu;
use App\cargo;
use App\persona;
use App\estado;
use App\busqueda;
use App\Http\Requests\buscar;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\funcionesayudas;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::name("/buscar")->get('/buscar', function (buscar $request) {
    if($request->get('busqueda') != ""){    
        $busque = busqueda::busquedaUS($request->get('busqueda')); 
    }else{
        $busque = busqueda::busquedaTo();
    }
    return view('app.buscar')->with("res", $busque);
});

Route::name("ini")->get("/instalador", function(){return view("install.index");});

Route::name("ver")->get("/detalles/{idp}", function($idp){
    $datos = busqueda::busquedaDetallada($idp); 
    $cargos = cargo::all();
    $estado = estado::all();
    return view("app.ver")->with("usuario", $datos)->with("cargos", $cargos)->with('esta', $estado);
});

Route::name("actualizar")->post("/buscar/actualizar","HomeController@index");                        
Route::name("regispr")->post("/instalador","HomeController@store");

Route::name("completarInfo")->get("/instalador/completar",function(){
    $Id = funcionesayudas::getIdIni();
    $datos = busqueda::busquedaUsPer($Id);
    $cargos = cargo::all();
    $estado = estado::all();
    return view('install.completar', ["Usuario" => $datos])->with("cargos", $cargos)->with('esta', $estado);
});

Route::name("finalizar")->post("/instalador/finalizar/","HomeController@update");
Route::name("/log")->get("/log", function(){
    return view("log.register");
});
Route::name("/regist")->post("/logi","LogController@store");
Route::name("/dashboard")->get("/dashboard","LogController@show");