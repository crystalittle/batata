{{--resources/views/animais/index.blade.php--}}

@extends('base')

@section('titulo', 'Animais para adoção')

@section('conteudo')
<p>
    <a href="{{ route('animais.cadastrar') }}">Cadastrar animais</a>
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