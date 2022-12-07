@extends('main')

@section('title', 'Usuarios Cadastrados')

@section('content')

<div class="row">
    @if (session()->has('msg'))
        <p class="msg">
            {{ session('msg') }}
        </p>
    @endif
</div>
<div class="container text-center labels">

    <div class="row">
        <div class="col-2">
            Nome:
        </div>
        <div class="col-2">
            Email:
        </div>
        <div class="col-3" style="margin-left: 6%;">
            Data de Nascimento:
        </div>
        <div class="col-3">
            Criado em:
        </div>
    </div>

    <div class="divisoria"></div>
    @foreach ($users as $user)
    <div class="row">
        <div class="col-2">
            {{$user->Nome}}
        </div>
        <div class="col-3">
            {{$user->Email}}
        </div>
        <div class="col-3" style="margin-left: -5%;">
            {{$user->Data_Nascimento}}
        </div>
        <div class="col-4 style">
            {{$user->created_at}}
            <a href="/editar-usuario/{{$user->id}}"><button type="submit" class="btn btn-outline-primary">Editar</button></a>
            <form action="/deletar-usuario/{{$user->id}}" method="POST">
                @csrf
                @method('DELETE')
                <a href=""><button type="submit" class="btn btn-outline-warning">Excluir</button></a>
            </form>
        </div>

    </div>
    <br>
    @endforeach
    <div class="row labels">
        <div class="col-12">
            <a href="/novo-usuario"><button type="button" class="btn btn-outline-secondary">Cadastrar novo usuário</button></a>
        </div>
    </div>


    @endsection