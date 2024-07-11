@extends('base')
@section('titulo', 'Editar Usuários')
@section('conteudo')
 <h1>Usuários - Editar</h1>
 @if ($errors->any())
 <p>Preencha os campos corretamente.</p>
 <ul>
 @foreach($errors->all() as $erro)
 <li>{{ $erro }}</li>
 @endforeach
 </ul>
 @endif
 <form action="{{ route('usuarios.editar', $usuario->id) }}" method="post">
 @csrf
 @method('put')

 <p><input value="{{ old('nome', $usuario->nome ?? '') }}" type="text" name="nome"
placeholder="Nome"></p>
 <p><input value="{{ old('email', $usuario->email ?? '') }}" type="text" name="email"
placeholder="Email"></p>
 <p><input value="{{ old('password', $usuario->password ?? '') }}" type="text" name="password"
placeholder="Senha"></p>
 <p><input value="{{ old('Username', $usuario->username ?? '') }}" type="text" name="username"
placeholder="username"></p>
<select name="admin" value="{{ old('admin', $usuario->email ?? '') }}">
    <option value="null">Selecione uma opção</option>
    <option value="1">yes</option>
    <option value="0">no</option>
    </select>
 <p><input type="submit" value="Editar"></p>
 </form>
@endsection