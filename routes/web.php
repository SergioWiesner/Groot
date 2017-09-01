<?php
use App\usu;
use App\cargo;
use App\persona;
use App\busqueda;
use App\Http\Requests\buscar;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\funcionesayudas;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

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
Route::name("ini")->get("/instalador", function(){
        $id=0;
        $cargos = cargo::all();
        $useo = funcionesayudas::getIdIni($id);
        $users = DB::table('users')
                ->where('IdPer', $useo)
                ->get();
        $personas = DB::table('personas')
                ->where('Id', $useo)
                ->get();
    return view("install.completar", ["perso"=>$personas])->with("Usuario", $users)->with("cargo", $cargos);
});

Route::name("ver")->get("/detalles/{idp}", function($idp){
    $datos = busqueda::busquedaDetallada($idp); 
    return view("app.ver")->with("usuario", $datos);
});
                        
Route::name("regispr")->post("/instalador","HomeController@store");
Route::name("completarInfo")->get("/completar","LogController@create");
Route::name("finalizar")->patch("/finalizar/", "HomeController@update");
Route::name("/log")->get("/log","LogController@index");
Route::name("regist")->post("/logi","LogController@store");
Route::name("/dashboard")->get("/dashboard","LogController@show");