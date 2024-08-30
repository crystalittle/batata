{{--resources/views/usuarios/index.blade.php--}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p>
    <a href="{{ route('usuarios.cadastrar') }}"
    class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" >
    <i class="fas fa-plus mr-3"></i>
    Cadastrar usuários</a>
</p>


<div class="w-full mt-12">
 <p class="text-xl pb-3 flex items-center">
 <i class="fas fa-list mr-3"></i> Lista de usuários
 </p>
<div class="bg-white overflow-auto">
    <table class="text-left w-full border-collapse">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Nome</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Email</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Senha</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Username</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Admin</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Editar</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Apagar</th>
            </tr>
        </thead>
        <tbody>    
        @foreach($usuarios as $usuario)
            <tr class="hover:bg-grey-lighter">
            <td  class="py-4 px-6 border-b border-grey-light">{{ $usuario['nome'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $usuario['email'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $usuario['password'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $usuario['username'] }}</td>
            <td class="py-4 px-6 border-b border-grey-light">{{ $usuario['admin'] }}</td>
                <td>
                <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Gravar" ><a href="{{ route('usuarios.editar', $usuario['id']) }}">Editar</a></button>
                </div>
                </td>
                <td>
                <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Gravar" ><a href="{{ route('usuarios.apagar', $usuario['id']) }}">Apagar</a></button>
                </div>
                </td>
            </tr>
        </tbody> 
        @endforeach
  </div>
</table>
@endsection