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


<table border="1">
    <tr>
        <th>titulo</th>
      
    </tr>

    @foreach($animais as $animal)
    <tr>
        <td>{{ $animal['nome'] }}</td>
        <td>{{ $animal['idade'] }}</td>
        <td><a href="{{ route('animais.editar', $animal['id']) }}">Editar</a></td>
        <td><a href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>
@endsection