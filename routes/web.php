<?php

use App\Http\Controllers\EditorialController;
use App\Http\Controllers\TituloController;
use App\Http\Controllers\AutorController;
use Illuminate\Support\Facades\Route;

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
 
Route::get('/EditorialCon/{id}',[EditorialController::class,'ConsultaEditorial']);
Route::get('/TitulosXE/{id}',[EditorialController::class,'ConsultaTitulosEditorial']);
Route::get('/TituloCon/{id}',[TituloController::class,'ConsultaTitulo']);
Route::get('/TituloXAut/{id}',[TituloController::class,'ConsultaTitulosAutor']);
Route::get('/AutorCon/{id}',[AutorController::class,'ConsultaAutor']);
Route::get('editoriales_imprimir',[EditorialController::class,'imprimir']);

Route::post('guardarAutorTitulo/{id}', [TituloController::class, 'guardarAutorTitulo']);



Route::resource('/editoriales',EditorialController::class);
Route::resource('/titulos',TituloController::class);
Route::resource('/autores',AutorController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
