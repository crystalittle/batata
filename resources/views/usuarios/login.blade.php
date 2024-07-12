@extends('base')

@section('titulo', 'Login Usuários')

@section('conteudo')

@if(session('erro'))
    <div style="background-color:red;color:white">
    {{ session('erro') }}
    </div>
@endif

@if($errors->any())
<div>
    <h2>Deu ruim</h2>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
        @endforeach
</div>
@endif

<form action="{{ route('login') }}" method="post">
    @csrf
    <input type="text" name="username" placeholder="Usuários">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <input type="submit" value="Entrar">
</form>
@endsection