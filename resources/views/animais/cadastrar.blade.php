{{--views/animais/cadastrar.blade.php--}}
@extends('base')

@section('titulo', 'Cadastrar | Animais para adoação')

@section('conteudo')
<p>Preencha o formulário</p>
<form method="post" action="{{ route('animais.gravar') }}">
    <input type="text" name="nome" placeholder="Nome">
    <br>
    <input type="number" name="idade" plcadeholder="Idade">
    <br>
    <input type="submit" value="Gravar">
</form>
@endsection