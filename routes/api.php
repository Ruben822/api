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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::apiResource("mascotas","MascotaController");
Route::get("mascotas","MascotaController@index")->name("inicio");
Route::post("/mascotass","MascotaController@store")->name("envio");
Route::get("mascotass","MascotaController@create")->name("crear");
Route::get("mascotasC/{id}","MascotaController@edit")->name("editar");
Route::put("mascotasC/{id}","MascotaController@update")->name("actualizar");
