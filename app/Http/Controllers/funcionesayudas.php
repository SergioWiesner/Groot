<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class funcionesayudas extends Controller
{
     public static function getId(){
     $ide=DB::table('users')->select('IdPer')->where('IdPer', DB::raw("(select max(`IdPer`) from users)"))->get();
     foreach ($ide as $o) {
				return $id = $o->IdPer;
    }
    }
    public static function getIdIni(){
     $ide=DB::table('users')->select('IdPer')->where('IdPer', DB::raw("(select min(`IdPer`) from users)"))->get();
     foreach ($ide as $o) {
	 return $id = $o->IdPer;
    }
    }
    public static function PrimerRegistro($reg){
    DB::table('personas')->insert(['Id' => $reg['Id']]);
       $rsp = DB::table('users')->insert(
        ['Identificador' => $reg['Identificador'], 
         'user' => $reg['User'], 
         'password' => $reg['Password'],
         'IdPer' => $reg['Id']]);
       
        return $rsp;
    }
}
