@extends('layouts.exemplo')

@section('title', 'Curso')


@section('content')
    <h1>Listagem de usuários <a href="{{ route('users.create') }}">+</a></h1>

    <form action="{{ route('users.index') }}" method="get">
        <input type="text" name="pesquisar" id="Pesquisar">
        <button>
            Enviar
        </button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} -
                {{ $user->email }}
                | <a href="{{ route('users.show', ['id' => $user->id]) }}">Detalhes</a>
                | <a href="{{ route('users.edit', ['id' => $user->id]) }}">Editar</a>
            </li>
        @endforeach
    </ul>
@endsection
