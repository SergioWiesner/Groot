<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class busqueda extends Model
{
   public static function busquedaUS($valor){
       $user = DB::select( DB::raw('SELECT * FROM personas INNER JOIN users ON  personas.Id = users.IdPer WHERE users.Identificador LIKE "%'.$valor.'%" OR users.user LIKE "%'.$valor.'%"'));
       return $user;
   }
    public static function busquedaTo(){
       $users = DB::select('SELECT * FROM personas INNER JOIN users ON  personas.Id = users.IdPer');
       return $users;
   }
    public static function busquedaDetallada($id){
       $users = DB::select('SELECT * FROM personas INNER JOIN users ON  personas.Id = users.IdPer WHERE users.IdPer = "'.$id.'"');
       return $users;
   }
}
