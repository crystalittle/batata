{{--views/usuarios/cadastrar.blade.php--}}
@extends('base')

@section('titulo', 'Cadastrar Usuários')

@section('conteudo')
<p>Preencha o formulário</p>

<form method="post" action="{{ route('usuarios.gravar') }}">
    @csrf
    <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
    <br>
    <input type="text" name="email" plcadeholder="Email" value="{{ old('email') }}">
    <br>
    <input type="text" name="username" placedholder="Username" value="{{ old('username') }}">
    <br>
    <input type="number" name="senha" placedholder="Senha" value="{{ old('password') }}">
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection