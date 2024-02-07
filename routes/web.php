<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', 'App\Http\Controllers\HomeController@HOME');
Route::get('/cardapioAlimenticio', 'App\Http\Controllers\CardapioController@Cardapio');
Route::get('/cadastraralimentonocardapio', 'App\Http\Controllers\CardapioController@CadastrarAlimento');
Route::post('/refeicaofoicadastradacomsucesso', 'App\Http\Controllers\CardapioController@CadastradoAlimento');
Route::get('/listagemdosfuncionarios','App\Http\Controllers\FuncionariosController@listarFuncionarios');
Route::get('/cadastrofuncionario','App\Http\Controllers\FuncionariosController@CadastrarFuncionario');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
