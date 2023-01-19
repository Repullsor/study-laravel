@extends('layouts.main')

@section('title', 'CRUD - Cadastro')

@section('content')

    <h1>Cadastro</h1>
    <form action="{{ route('users.store') }}" method="POST" class="container-main">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" placeholder="Nome">
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" name="email" placeholder="E-mail">
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="password" placeholder="Senha">
        </div>
        <div>
            <label for="submit"></label>
            <input type="submit" value="Cadastrar">
        </div>

    </form>

@endsection
