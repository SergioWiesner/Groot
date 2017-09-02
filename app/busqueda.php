<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\ActualizarDatos;

class busqueda extends Model
{
   public static function busquedaUS($valor){
       $user = DB::select( DB::raw('SELECT * FROM personas INNER JOIN users ON  personas.Id = users.IdPer INNER JOIN cargo ON personas.IdCargo = cargo.Cargo INNER JOIN estado ON personas.IdEstado = estado.idEstado WHERE users.Identificador LIKE "%'.$valor.'%" OR users.user LIKE "%'.$valor.'%"'));
       return $user;
   }
    public static function busquedaTo(){
       $users = DB::select('SELECT * FROM personas INNER JOIN users ON  personas.Id = users.IdPer INNER JOIN cargo ON personas.IdCargo = cargo.Cargo INNER JOIN estado ON personas.IdEstado = estado.idEstado');
        dd($users);
       return $users;
   }
    public static function busquedaDetallada($id){

       $users = DB::select('SELECT * FROM personas INNER JOIN users ON  personas.Id = users.IdPer INNER JOIN cargo ON personas.IdCargo = cargo.Cargo INNER JOIN estado ON personas.IdEstado = estado.idEstado WHERE users.IdPer = "'.$id.'"');
        dd($users);
       return $users;
   }
    public static function busquedaUsPer($id){

       $users = DB::select('SELECT * FROM `users` INNER JOIN personas ON users.IdPer = personas.Id WHERE users.IdPer = "'.$id.'"');
       return $users;
   }
    
    public static function ActualizarTodosDatos($datos){
             
        $res = DB::table('users')
            ->where('IdPer', $datos['IdPer'])
            ->update(array(
                'user' => $datos['user'],
                'Idestado' => $datos['Idestado'],
                'Identificador' => $datos['Identificador'],
                'Cargo' => $datos['Cargo']));
        DB::table('personas')
            ->where('Id', $datos['IdPer'])
            ->update(array(
                'Nombres' => $datos['Nombres'],
                'Correo' => $datos['Correo'],
                'Telefono' => $datos['Telefono']));
          dd($res);
       return $users;
   }
}
