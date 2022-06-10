@extends('layouts.exemplo')

@section('title', 'Curso')

@section('content')
    <h1>Lista de itens <a href="{{ route('game.create') }}">(+)</a></h1>

    <ul>
        @foreach ($jogos as $jogo)
            <li>
                {{ $jogo->nome }} -
                {{ $jogo->ano_lancamento }} -
                {{ $jogo->genero }}
                | <a href="{{ route('game.show', ['game' => $jogo->id]) }}">Detalhes</a>
                |<a href="{{ route('game.edit', ['game' => $jogo->id]) }}">Editar</a>
            </li>
        @endforeach
    </ul>

@endsection
