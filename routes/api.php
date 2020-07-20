<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//-----------------------------------RUTAS MASCOTAS
Route::get("mascotas","MascotaController@index")->name("inicio");
Route::post("/mascotass","MascotaController@store")->name("envio");
Route::get("/mascotasB","MascotaController@borrados")->name("borrados");
Route::get("mascotass","MascotaController@create")->name("crear");
Route::get("mascotasC/{id}","MascotaController@edit")->name("editar");
Route::put("mascotasC/{id}","MascotaController@update")->name("actualizar");
Route::delete("mascotasE/{id}","MascotaController@destroy")->name("eliminar");
//-----------------------------------RUTAS INTITUCIONES
Route::get("institucion","InstitucionController@index")->name("inicioI");
Route::get("institucionC","InstitucionController@create")->name("crearI");
Route::get("institucionB","InstitucionController@borrados")->name("borradosI");
Route::post("/institucion","InstitucionController@store")->name("envioI");
Route::get("institucion/{id}","InstitucionController@edit")->name("editarI");
Route::put("institucion/{id}","InstitucionController@update")->name("actualizarI");
Route::delete("institucion/{id}","InstitucionController@destroy")->name("eliminarI");