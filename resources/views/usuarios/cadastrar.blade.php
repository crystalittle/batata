{{--views/usuarios/cadastrar.blade.php--}}
@extends('base')

@section('titulo', 'Cadastrar Usuários')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h2>Deu ruim</h2>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
        @endforeach
</div>
@endif


<form method="post" action="{{ route('usuarios.gravar') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
    <br>
    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
    <br>
    <input type="text" name="username" placeholder="Username" value="{{ old('username') }}">
    <br>
    <input type="password" name="password" placeholder="Senha" value="{{ old('password') }}">
    <br>
    <select name="admin">
    <option value="null">Selecione um opção</option>
    <option value="1">yes</option>
    <option value="0">no</option>
    </select>
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection