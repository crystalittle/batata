<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    
   public function index(){
    $dados = Jogo::all();
    return view('jogos.index', [
        'jogos' => $dados,
    ]);
}

public function cadastrar(){
    return view('jogos.cadastrar');
}

public function gravar(Request $form){ 
     $dados = $form->validate([
         'titulo' => 'required',
         'plataforma' => 'required',
         'genero' => 'required',
         'desenvolvedora' => 'required',
         'data_lancamento' => 'required',
     ]);    
     Jogo::create($dados);
     
     return redirect()->route('jogos');
}

public function apagar(Jogo $jogo){
    return view('jogos.apagar', [
        'jogo' => $jogo,
    ]);
}
}


