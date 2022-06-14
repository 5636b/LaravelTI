@extends('layouts.exemplo')

@section('title', 'Editar o Usuário {{ $user->name }}')


@section('content')

    <h1>Editar o Usuário {{ $user->name }}</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT ')
        @include('users.diretorio.form')
    </form>

@endsection
