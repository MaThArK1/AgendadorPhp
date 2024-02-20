@extends('layouts.forms')

@section('title', 'Register')

@section('content')
<div class="card text-bg-success mb-6 shadow p-3 mb-5 bg-body-tertiary rounded" style="max-width: 60rem; min-width: 30rem; min-height:20rem; background-color:rgb(32, 32, 32, 1); color:white">
<form action="{{ route('users-store') }}" method="POST">
@csrf
<h1 class="card-header">Agendador - Registro</h1>
    <div class="form-group">

<div class="card-body">
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="string" class="form-control" name="name"  placeholder="Insira seu nome...">
    </div>
    <br>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Insira seu email...">
        <small id="emailHelp" class="form-text ">Não compartilharemos seu email.</small>
    </div>
    <br>
    <div class="form-group">
        <label for="cpfCnpj">CPF ou CNPJ:</label>
        <input type="string" class="form-control" name="cpfCnpj" placeholder="Insira seu CPF ou CNPJ...">
    </div>
    <br>
    <div class="form-group">
        <label for="password">Senha:</label>
        <input type="password" class="form-control" name="password" placeholder="Insira sua senha...">
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-success">Registrar</button>
    </div>
    </div>
</form>
</div>

@endsection