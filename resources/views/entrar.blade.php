@extends('layouts.main')

@section('title', 'Entrar')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1>Entrar</h1>
                <form action="/entrar" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <a href="/cadastrar">Ainda não tem conta? Cadastre-se</a><br>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
