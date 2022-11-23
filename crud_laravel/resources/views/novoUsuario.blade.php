@extends('main')

@section('title', 'Novo Usuário')

@section('content')



<h2 class="labels">Cadastrar novo Usuário</h2>
<div class="container text-center labels">
    <form id="cadUsuario" method="POST">
    @csrf
        <div class="row">
            <div class="col-4">
                
                <input type="hidden" name="_token" id='token' value="{{ csrf_token() }}" />
                <input type="text" class="form-control" id="nome" name="Nome" placeholder="Nome"1 required>
                <input type="text" class="form-control labels" id="email" name="Email" placeholder="Email" required>
            </div>
            <div class="col-4">
                <input type="data" class="form-control" id="data" name="Data_Nascimento" placeholder="Data de Nascimento">
                <input type="password" class="form-control labels" id="senha" name="Senha" placeholder="Senha" required minlength="8">
            </div>
        
        </div>
        <div class="row labels">
            <div class="col-4">
            <button type="submit" id="salvar" class="btn btn-outline-primary">Salvar</button>
            </div>
            <div class="col-4">
            <a href="/"><button type="button" class="btn btn-outline-warning">Voltar</button></a>
            </div>
        </div>
    </form>
</div>   
@endsection