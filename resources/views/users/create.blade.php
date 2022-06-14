@extends('layouts.exemplo')

@section('title', 'Novo Usuário')


@section('content')

    <h1>Novo Usuário</h1>

  @include('includes.error')

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @include('users.diretorio.form')
    </form>

@endsection
