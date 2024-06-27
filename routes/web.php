<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\JogosController;
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

Route::get('/animais', 
[AnimaisController::class, 'index'])
->name('animais');

Route::get('/animais/cadastrar',
[AnimaisController::class, 'cadastrar'])
->name('animais.cadastrar');

Route::post('/animais/cadastrar',
[AnimaisController::class, 'gravar'])
->name('animais.gravar');

Route::get('/animais/apagar/{animal}',
[AnimaisController::class, 'apagar'])->name('animais.apagar');

Route::delete('/animais/apagar/{animal}',
[AnimaisController::class, 'apagar']);

Route::get('/animais/editar/{animal}', [AnimaisController::class, 'editar'])->name('animais.editar');

Route::put('/animais/editar/{animal}', [AnimaisController::class, 'editarGravar']);

Route::get('/jogos',
[JogosController::class, 'index'])
->name('jogos');

Route::get('/jogos/cadastrar',
[JogosController::class, 'cadastrar'])
->name('jogos.cadastrar');

Route::post('/jogos/cadastrar',
[JogosController::class, 'gravar'])
->name('jogos.gravar');

Route::get('/jogos/apagar/{jogo}',
[jogoController::class, 'apagar'])->name('jogos.apagar');

Route::delete('/jogos/apagar/{jogo}',
[JogosController::class, 'apagar']);
