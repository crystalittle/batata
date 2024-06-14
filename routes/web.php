<?php

use App\Http\Controllers\AnimaisController;
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