@extends('layouts.forms')

@section('title', 'Login')

@section('content')
<div class="card text-bg-success mb-6 shadow p-3 mb-5 bg-body-tertiary rounded" style="max-width: 60rem; min-width: 30rem; min-height:20rem; background-color:rgb(32, 32, 32, 1); color:white">
    @if (session() ->has('success'))
    {{ session()->get('success') }}
    @endif

    @if (auth()->check())
    Already logged in | {{auth()->user()->name }} | <a href="{{ route('login-destroy') }}">Logout</a>
    @else

    @error('error')
    <span>{{$message}}</span>
    @enderror


    <form action="{{ route('login-store') }}" method="post">
        @csrf
        <h1 class="card-header">Agendador-Login</h1>
        <div class="form-group card-body" >
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="string" class="form-control" name="email" placeholder="Insira seu email...">
                @error('email')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" name="password" placeholder="Insira sua senha...">
                @error('password')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="grid text-center" style="--bs-columns: 4; --bs-gap: 10rem;">
            <button type="submit" name="submit" class="btn btn-success g-col-2">Login</button>
            <a href="{{ route('users-create') }}" class="btn btn-secondary g-col-2">Cadastrar-se</a>
            </div>
        </div>
    </form>
</div>
@endif
@endsection