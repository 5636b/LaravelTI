@extends('layouts.exemplo')

@section('title', 'Curso')

@section('content')
    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('game.update', $jogos->id) }}" method="post">
        @method('PUT ')
        @csrf
        <input type="text" name="nome" id="nome" placeholder="Nome" value="{{ $jogos->nome }}">
        <input type="number" name="ano_lancamento" id="ano_lancamento" placeholder="E-mail"
            value="{{ $jogos->ano_lancamento }}">
        <input type="text" name="genero" id="genero" placeholder="Gênero">
        <button type="submit">
            Enviar
        </button>
    </form>
@endsection
