@extends('base')

@section('titulo', 'Login Usuários')

@section('conteudo')

@if($errors->any())
<div>
    <h2>Deu ruim</h2>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
        @endforeach
</div>
@endif

<form action="{{ route('login') }}" method="post" class="p-10 bg-white rounded shadow-xl">
    @csrf
    <div class="">
    <label class="block text-sm text-gray-600" for="username">Usuário</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text" required="" placeholder="usuário" aria-label="Usuário">
    </div>
    <div class="mt-2">
    <label class="block text-sm text-gray-600" for="password">Senha</label>
    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required="" placeholder="senha" aria-label="Senha">
    </div>

     <div class="mt-6">
     <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Entrar</button>
     </div>
</form>
@endsection