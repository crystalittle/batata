@extends('base')

@section('titulo', 'Inserir dados | Jogos virtuais')

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

<form method="post" action="{{ route('jogos.gravar') }}">
    @csrf
    <input type="text" name="titulo" placeholder="titulo" value="{{ old('titulo') }}">
    <br>
    <input type="text" name="plataforma" placeholder="Plataforma" value="{{ old('plataforma') }}">
    <br>
    <input type="text" name="genero" placeholder="Gênero" value="{{ old('gênero') }}">
    <br>
    <input type="text" name="desenvolvedora" placeholder="Desenvolvedora" value="{{ old('desenvolvedora') }}">
    <br>
     <input type="date" name="data_lancamento" value="{{ old('data_lancamento') }}">
    <br>
    <input type="submit" value="Enviar">
</form>
@endsection