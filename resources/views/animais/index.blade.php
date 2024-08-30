{{--resources/views/animais/index.blade.php--}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a href="{{ route('animais.cadastrar') }}" 
    class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" >
    <i class="fas fa-plus mr-3"></i>
    Cadastrar animais</a>
</p>

 <div class="w-full mt-12">
 <p class="text-xl pb-3 flex items-center">
 <i class="fas fa-list mr-3"></i> Lista de animais para adoção
 </p>
 <div class="bg-white overflow-auto">
    <table class="text-left w-full border-collapse">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nome</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Idade</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Editar</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Apagar</th>
            </tr>
        </thead>
        <tbody>    
        @foreach($animais as $animal)
            <tr class="hover:bg-grey-lighter">
                <td class="py-4 px-6 border-b border-grey-light">{{ $animal['nome'] }}</td>
                <td class="py-4 px-6 border-b border-grey-light">{{ $animal['idade'] }}</td>
                <td>
                <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Gravar" ><a href="{{ route('animais.editar', $animal['id']) }}">Editar</a></button>
                </div>
                </td>
                <td>
                <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Gravar" ><a href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a></button>
                </div>
                </td>
            </tr>
        </tbody> 
        @endforeach
  </div>
</table>
@endsection