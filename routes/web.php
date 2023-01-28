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
// Route::get('/', function () {
//     return view('auth.login');
// })->middleware('checkAuth');;
Route::get('/', function () {
    return view('auth.login');
})->middleware('checkAuth');;
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/autenticacion', 'userController@index');
Route::get('/getUsers', 'userController@show');
Route::get('/changeStatusUsers/{id}/{user}', 'userController@update');
Route::get('/reset/{user}', 'userController@reset');
Route::get('/create/{user}', 'userController@create');
//rutas administrador

Route::get('/getNumClientes', 'PersonasController@show');
Route::post('/addPersona', 'PersonasController@store');
Route::get('/getNumAtendidos', 'TicketsController@show');
Route::get('/getPersonas', 'PersonasController@index');
Route::get('/getPersona/{id}', 'PersonasController@persona');



Route::get('{path}', 'HomeController@index');