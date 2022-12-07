@extends('main')

@section('title', 'Novo Usuário')

@section('content')
<h2 class="labels">Editar Usuário {{$usuario->Nome}}</h2>
<div class="container text-center labels">
    <form action="/salvar-usuario/{{ $usuario->id }}" method="POST">
        @method('PUT')
        @csrf
        
        <div class="row">
            <div class="col-4">
                <input type="hidden" name="_token" id='token' value="{{ csrf_token() }}" />
                <input type="hidden" name="_method" value="PUT" />
                <input type="hidden" name="usuarioId" id='idUsuario' value="{{$usuario->id}}" />
                <input type="text" class="form-control" id="novoNome" name="Nome" placeholder="Nome" value="{{$usuario->Nome}}" required>
                <input type="text" class="form-control labels" id="novoEmail" name="Email" placeholder="Email" value="{{$usuario->Email}}" required>
            </div>
            <div class="col-4">
                <input type="data" class="form-control" id="novaData" name="Data_Nascimento" placeholder="Data de Nascimento" value="{{$usuario->Data_Nascimento}}">
                <input type="password" class="form-control labels" id="novaSenha" name="Senha" placeholder="Senha" minlength="8" value="{{$usuario->Senha}}" required>
            </div>

        </div>
        <div class="row labels">
            <div class="col-4">
                <a href=""><button type="submit" id="editarUsuario" class="btn btn-outline-primary">Salvar</button></a>
            </div>
            <div class="col-4">
                <a href="/"><button type="button" class="btn btn-outline-warning">Cancelar</button></a>
            </div>
        </div>
    </form>
</div>
@endsection