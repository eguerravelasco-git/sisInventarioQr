<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Permission\Models\Role;
use App\Permission\Models\Permission;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*Route::get('/test', function () {
    
    $user =User::find(6);

    //$user->roles()->sync([2]);
    Gate::authorize('haveaccess','role.show');
    return $user;
    //return $user->havePermission('role.create'); 
});*/

Route::resource('/role', 'RoleController')->names('role');
Route::resource('/categoria', 'CategoriaController')->names('categoria');
Route::resource('/equipo', 'EquipoController')->names('equipo');

Route::resource('/user', 'UserController')->names('user');