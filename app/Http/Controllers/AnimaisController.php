<?php

namespace App\Http\Controllers;

use App\Mail\AnimalCadastrado;
use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AnimaisController extends Controller
{
   public function index(){
       $dados = Animal::get();

       $animaisPorIdade = Animal::groupBy('idade')
       ->selectRaw('idade , count(*) as quantidades')
       ->get();  

       return view('animais.index', [
           'animais' => $dados,
       ]);
   }

   public function cadastrar(){
       return view('animais.cadastrar');
   }

   public function gravar(Request $form){ //quando acessar animais cadastrar via post, submentendo o form
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'idade' => 'required|integer'
        ]);    

        #Animal::create($dados);
        Mail::to('alguem@batata.com')->send(new AnimalCadastrado);
        #return redirect()->route('animais);

        Animal::create($dados);
        
        return redirect()->route('animais');
   }

   public function apagar(Animal $animal){
       return view('animais.apagar', [
           'animal' => $animal,
       ]);
   }
   public function editar(animal $animal) {
    return view('animais/editar', ['animal' => $animal]);
   }

   public function editarGravar(Request $form, Animal $animal)
{
 $dados = $form->validate([
 'nome' => 'required|max:255',
 'idade' => 'required|integer',
 ]);

 $animal->fill($dados);
 $animal->save();
 return redirect()->route('animais');
}

public function deletar(Animal $animal){
   $animal -> delete();
   return redirect() -> route('animais');
}

}

