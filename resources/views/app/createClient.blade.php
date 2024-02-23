@extends('layouts.app')

@section('title', 'Agendador')

@section('content')
<div class="card text-bg-success mb-6 shadow p-3 mb-5 bg-body-tertiary rounded mt-5" style="max-width: 60rem; min-width: 30rem; min-height:20rem; background-color:rgb(32, 32, 32, 1); color:white">
    <form action="{{ route('clients-store') }}" method="post">
        @csrf
        <div>
            <h1 class="card-header">Cadastro de cliente</h1>
            <div class="form-group card-body">
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Insira o nome completo...">
                </div>
                <br>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Insira o E-mail...">
                </div>
                <br>
                <div class="form-group">
                    <label for="cpfCnpj">CPF / CNPJ:</label>
                    <input type="text" class="form-control" id="cpfCnpj" name="cpfCnpj" placeholder="Insira o CPF ou CNPJ...">
                </div>
                <br>
                <div class="form-group">
                    <label for="phoneNumber">Telefone:</label>
                    <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Insira o Telefone...">
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success" style="background-color: green; color:antiquewhite;">Cadastrar</button>
                </div>
                <br>
            </div>
        </div>
    </form>
</div>

@endsection