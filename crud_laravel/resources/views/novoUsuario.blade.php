@extends('main')

@section('title', 'Novo Usuário')

@section('content')

<div class="container text-center labels">
    
            <div class="row">
                <div class="col-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome" required>
                    <input type="text" class="form-control labels" id="exampleFormControlInput1" placeholder="Email" required>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Data de Nascimento">
                    <input type="text" class="form-control labels" id="exampleFormControlInput1" placeholder="Senha" required>
                </div>
           
    </div>
    <div class="row labels">
        <div class="col-4">
        <a href="/"><button type="button" class="btn btn-outline-primary">Salvar</button></a>
        </div>
        <div class="col-4">
        <a href="/"><button type="button" class="btn btn-outline-warning">Cancelar</button></a>
        </div>
    </div>


@endsection