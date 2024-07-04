<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(){
        $dados = Usuarios::all();
        return view('usuarios.index', [
            'usuarios' => $dados,
        ]);
    }
 
    public function cadastrar(){
        return view('usuarios.cadastrar');
    }

    public function gravar(Request $form){ //quando acessar animais cadastrar via post, submentendo o form
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'email' => 'required|'
        ]);    
        usuarios::create($dados);
        
        return redirect()->route('usuario');
   }

   public function editarGravar(Request $form, Usuarios $usuario)
   {
    $dados = $form->validate([
    'nome' => 'required|max:255',
    'email' => 'required|max:225',
    ]);

 $usuario->fill($dados);
 $usuario->save();
 return redirect()->route('usuario');
}


}
