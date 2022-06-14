@extends('layouts.exemplo')

@section('title', 'Curso')

@section('content')
    <h1>Remoção de produtos {{ $jogos->nome }}</h1>

    <ul>
        <li>{{ $jogos->nome }}</li>
        <li>{{ $jogos->ano_lancamento }}</li>
        <li>{{ $jogos->genero }}</li>
    </ul>

    <form action="{{ route('game.destroy', $jogos->id) }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Remover</button>
    </form>


@endsection
