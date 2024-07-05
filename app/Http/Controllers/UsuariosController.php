<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'email' => 'required|',
            'username' => 'required',
            'password' => 'required',
            'admin' => 'boolean'
        ]);    

        $dados['password'] = Hash::make($dados['password']);

        Usuarios::create($dados);
        
        return redirect()->route('usuarios');
   }

   public function editar(usuarios $usuario) {
    return view('usuarios/editar', ['usuario' => $usuario]);
   }

   public function editarGravar(Request $form, Usuarios $usuario)
   {
    $dados = $form->validate([
    'nome' => 'required|max:255',
    'email' => 'required|max:225',
    ]);
    
    }
}
