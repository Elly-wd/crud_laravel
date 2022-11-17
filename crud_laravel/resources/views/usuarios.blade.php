@extends('main')

@section('title', 'Usuarios Cadastrados')

@section('content')

<div class="container text-center labels">
    <div class="row">
        <div class="col">
        Nome:
        </div>
        <div class="col">
        Email:
        </div>
        <div class="col">
        Data de Nascimento:
        </div>
        <div class="col">
        Criado em:
        </div>
    </div>

    @foreach ($users as $user)
        <div class="row">
            <div class="col">
                {{$user->Nome}}
            </div>
            <div class="col">
                {{$user->Email}}
            </div>
            <div class="col">
                {{$user->Data_Nascimento}}
            </div>
        </div>
    @endforeach

    <div class="divisoria"></div>
    <div class="row labels">
        <div class="col-12">
        <a href="/novo-usuario"><button type="button" class="btn btn-outline-secondary">Cadastrar novo usuário</button></a>
        </div>
    </div>


@endsection