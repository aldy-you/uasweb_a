<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//open route without autentification
Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

//open route with autentification
//route guru
Route::get("/guru", "GuruController@index")->middleware('jwt.verify');
Route::get("/guru/{id}", "GuruController@show")->middleware('jwt.verify');
Route::post("/guru", "GuruController@create")->middleware('jwt.verify');
Route::put("/guru/{id}", "GuruController@update")->middleware('jwt.verify');
Route::delete("/guru/{id}", "GuruController@delete")->middleware('jwt.verify');

//route matpel
Route::get("/matpel", "MatpelController@index")->middleware('jwt.verify');
Route::get("/matpel/{id}", "MatpelController@show")->middleware('jwt.verify');
Route::post("/matpel", "MatpelController@create")->middleware('jwt.verify');
Route::put("/matpel/{id}", "MatpelController@update")->middleware('jwt.verify');
Route::delete("/matpel/{id}", "MatpelController@delete")->middleware('jwt.verify');

//route ruang
Route::get("/ruang", "RuangController@index")->middleware('jwt.verify');
Route::get("/ruang/{id}", "RuangController@show")->middleware('jwt.verify');
Route::post("/ruang", "RuangController@create")->middleware('jwt.verify');
Route::put("/ruang/{id}", "RuangController@update")->middleware('jwt.verify');
Route::delete("/ruang/{id}", "RuangController@delete")->middleware('jwt.verify');

//route jadwal
Route::get("/jadwal", "JadwalController@index")->middleware('jwt.verify');
Route::get("/jadwal/{id}", "JadwalController@show")->middleware('jwt.verify');
Route::post("/jadwal", "JadwalController@create")->middleware('jwt.verify');
Route::put("/jadwal/{id}", "JadwalController@update")->middleware('jwt.verify');
Route::delete("/jadwal/{id}", "JadwalController@delete")->middleware('jwt.verify');

//cek autentification user
Route::get('user', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');
