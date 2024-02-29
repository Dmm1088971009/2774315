<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get("/pepe/{dato1}",[OperacionesController::class,'funcion1']);//
//Route::get('/primo',[OperacionesController::class,'create']);
//Route::post('/primo',[OperacionesController::class,'store'])->name('primo.store');

Route::get('/estudiante',[ProductController::class,'create']);
Route::post('/estudiante',[ProductController::class,'store'])->name('estudiante.store');

Route::get('/usuario',[Product1Controller::class,'create']);
Route::post('/usuario',[Product1Controller::class,'store'])->name('usuario.store');

Route::get('/profesor',[Product2Controller::class,'create']);
Route::post('/profesor',[Product2Controller::class,'store'])->name('profesor.store');


