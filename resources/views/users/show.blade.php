@extends('layouts.exemplo')


@section('title', 'Curso')


@section('content')
    <h1>Listagem do usuário {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @method('DELETE')
        @csrf

        <button type="submit">Remover</button>
    </form>
@endsection
