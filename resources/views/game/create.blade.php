@extends('layouts.exemplo')

@section('title', 'Projeto')

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

    <form action="{{ route('game.index') }}" method="post">
        @csrf
        <input type="text" name="nome" id="nome" placeholder="Nome" value="{{ old('nome') }}">
        <input type="number" name="ano_lancamento" id="ano_lancamento" placeholder="ano_lancamento">
        <input type="text" name="genero" id="genero" placeholder="genero">
        <button type="submit">
            Enviar
        </button>

    </form>

@endsection
