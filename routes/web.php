<?php

use App\Http\Controllers\AnimaisController;
use App\Http\Controllers\JogosController;
use App\Http\Controllers\UsuariosController;
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
    return view('iniciar');
}) -> name('index');

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
[AnimaisController::class, 'deletar']);

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

// Route::get('/usuarios', 
// [UsuariosController::class, 'index'])
// ->name('usuarios');

Route::prefix('usuarios')->middleware('auth')->group(function(){
    Route::get('/', [UsuariosController::class, 'index'])
    ->name('usuarios');

Route::get('/cadastrar', 
[UsuariosController::class, 'cadastrar'])
->name('usuarios.cadastrar');

Route::post('/gravar', 
[UsuariosController::class, 'gravar'])
->name('usuarios.gravar');

Route::get('/editar/{usuario}', [UsuariosController::class, 'editar'])
->name('usuarios.editar');

Route::put('/editar/{usuario}', [UsuariosController::class, 'editarGravar'])
->name('usuarios.editarGravar');

Route::get('/apagar/{usuario}',
[UsuariosController::class, 'apagar'])->name('usuarios.apagar');

Route::delete('/apagar/{usuarios}',
[UsuariosController::class, 'remove'])
->name('usuarios.apagar');
});

Route::get('login', [UsuariosController::class, 'login'])->name('login');

Route::post('login', [UsuariosController::class, 'login'])->name('login');

Route::get('logout', [UsuariosController::class, 'logout'])->name('logout');