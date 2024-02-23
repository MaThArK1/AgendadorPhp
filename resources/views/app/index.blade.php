@extends('layouts.app')

@section('title', 'Agendador')

@section('content')
<div class="mt-5">
    <h1 style="color: white;">Bem vindo ao Agendador!</h1>
</div>
<div class="mt-5 justify-content-between">
    <a class="btn btn-success" href="#" role="button">Realizar reserva</a>
    <a class="btn btn-primary" href="/admin/clients" role="button">Cadastrar cliente</a>
</div>
@if (session() ->has('success'))
<div class="alert alert-success mt-auto" role="alert">
    {{ session()->get('success') }}
</div>
@endif
</div>
@endsection