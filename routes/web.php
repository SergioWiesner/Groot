<?php

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
Route::name("ini")->get("/instalador","HomeController@index");
Route::name("regispr")->post("/instalador","HomeController@store");
Route::name("completarInfo")->get("/completar","LogController@create");
Route::name("finalizar")->patch("/finalizar/", "HomeController@update");
Route::name("/log")->get("/log","LogController@index");
Route::name("regist")->post("/logi","LogController@store");
Route::name("/dashboard")->get("/dashboard","LogController@show");