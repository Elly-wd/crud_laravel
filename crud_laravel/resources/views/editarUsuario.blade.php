@extends('main')

@section('title', 'Novo Usuário')

@section('content')
<h2 class="labels">Editar Usuário {{$usuario->Nome}}</h2>
<div class="container text-center labels">
    <form action="/salvar-usuario/{{$usuario->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="row">
            <div class="col-4">
                <input type="text" class="form-control" id="exampleFormControlInput1" name="Nome" placeholder="Nome" value="{{$usuario->Nome}}" required>
                <input type="text" class="form-control labels" id="exampleFormControlInput1" name="Email" placeholder="Email" value="{{$usuario->Email}}" required>
            </div>
            <div class="col-4">
                <input type="data" class="form-control" id="exampleFormControlInput1" name="Data_Nascimento" placeholder="Data de Nascimento" value="{{$usuario->Data_Nascimento}}">
                <input type="password" class="form-control labels" id="exampleFormControlInput1" name="Senha" placeholder="Senha" minlength="8" value="{{$usuario->Senha}}" required>
            </div>
        
        </div>
        <div class="row labels">
            <div class="col-4">
            <a href=""><button type="submit" class="btn btn-outline-primary">Salvar</button></a>
            </div>
            <div class="col-4">
            <a href="/"><button type="button" class="btn btn-outline-warning">Cancelar</button></a>
            </div>
        </div>
    </form>
</div>
@endsection