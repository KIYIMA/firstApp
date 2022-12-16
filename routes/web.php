<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;

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

Route::get('/usuarios', [UserController::class, 'index']);


Route::get('/usuarios/{id}', [UserController::class, 'show'])
    ->where('id','[0-9]+'); //O '\d+' en lugar de [0-9] Con esto le indico que el parametro solo puede ser numerico, de lo contrario tomaría una cadena por ejemplo como el $id

Route::get('/usuarios/nuevo',[UserController::class, 'create'] );

//Con el "?" le digo que si no manda el parametro igual ejecute la funcion
Route::get('/saludo/{name}/{nickname?}', [WelcomeUserController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
