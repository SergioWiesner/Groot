<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class funcionesayudas extends Controller
{
     public static function getId($id){
     $ide=DB::table('users')->select('IdPer')->where('IdPer', DB::raw("(select max(`IdPer`) from users)"))->get();
     foreach ($ide as $o) {
				return $id = $o->IdPer;
    }
    }
    public static function getIdIni($id){
     $ide=DB::table('users')->select('IdPer')->where('IdPer', DB::raw("(select min(`IdPer`) from users)"))->get();
     foreach ($ide as $o) {
				return $id = $o->IdPer;
    }
    }
}
