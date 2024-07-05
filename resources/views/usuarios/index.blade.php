{{--resources/views/usuarios/index.blade.php--}}

@extends('base')

@section('titulo', 'Usuários')

@section('conteudo')
<p>
    <a href="{{ route('usuarios.cadastrar') }}">Cadastrar usuario</a>
</p>


<table border="1">
    <tr>
        <th>titulo</th>
      
    </tr>

    @foreach($usuarios as $usuario)
    <tr>
        <td>{{ $usuario['nome'] }}</td>
        <td>{{ $usuario['email'] }}</td>
        <td>{{ $usuario['password'] }}</td>
        <td>{{ $usuario['username'] }}</td>
        <td>{{ $usuario['admin'] }}</td>
        <td><a href="{{ route('usuarios.editar', $usuario['id']) }}">Editar</a></td>
        {{-- <td><a href="{{ route('usuario.editar', $animal['id']) }}">Editar</a></td>
        <td><a href="{{ route('animais.apagar', $animal['id']) }}">Apagar</a></td> --}}
    </tr>
    @endforeach

</table>
@endsection