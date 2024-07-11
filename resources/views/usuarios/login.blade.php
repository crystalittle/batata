@extends('base')

@section('titulo', 'Login Usuários')

@section('conteudo')

<form action="{{ route('login') }}" metho="post">
    @csrf
    <input type="text" name="username" placeholder="Usuários">
    <br>
    <input type="text" name="password" placeholder="Senha">
    <br>
    <input type="submit" value="Entrar">
</form>