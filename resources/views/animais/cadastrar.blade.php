{{--views/animais/cadastrar.blade.php--}}
@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

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
</form>

<div class="flex flex-wrap">
<div class="w-full my-6 pr-0 ">
    <p class="text-xl pb-6 flex items-center">
        <i class="fas fa-list mr-3"></i> Cadastrar animal
    </p>
    <div class="leading-loose">
        <form method="post" action="{{ route('animais.gravar') }}" class="p-10 bg-white rounded shadow-xl"> 
        @csrf
            <div class="">
                <label class="block text-sm text-gray-600" for="name">Nome</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" name="nome" type="text" placeholder="Nome" aria-label="Nome" value="{{ old('nome') }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-gray-600" for="email">Idade</label>
                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="idade" name="idade" type="number" placeholder="Idade" aria-label="idade" value="{{ old('idade') }}">
            </div>
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Gravar" >Cadastrar</button>
        </div>
   </form>
</div>
@endsection