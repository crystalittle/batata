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

 <p><input value="{{ old('nome', $usuarios->nome ?? '') }}" type="text" name="nome"
placeholder="Nome"></p>
 <p><input value="{{ old('email', $usuarios->email ?? '') }}" type="text" name="email"
placeholder="Email"></p>
 <p><input value="{{ old('password', $usuarios->password ?? '') }}" type="text" name="password"
placeholder="Email"></p>
 <p><input value="{{ old('Username', $usuarios->username ?? '') }}" type="text" name="username"
placeholder="username"></p>
<p><input value="{{ old('admin', $usuarios->admin ?? '') }}" type="text" name="admin"
placeholder="Admin"></p>
 <p><input type="submit" value="Editar"></p>
 </form>
@endsection