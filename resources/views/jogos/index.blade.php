{{--resources/views/animais/index.blade.php--}}

@extends('base')

@section('titulo', 'Loja de josgos virtuais')

@section('conteudo')
<p>
    <a href="{{ route('jogos.cadastrar') }}">Inserir jogos</a>
</p>


    @foreach($jogos as $jogo)
    <tr>
        <td>{{ $jogo['titulo'] }}</td>
        <td><a href="{{ route('jogos.apagar', $jogo['id']) }}">Apagar</a></td>
    </tr>
    @endforeach

</table>
@endsection