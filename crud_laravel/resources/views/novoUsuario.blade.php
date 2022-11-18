@extends('main')

@section('title', 'Novo Usuário')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<h2 class="labels">Cadastrar novo Usuário</h2>
<div class="container text-center labels">
@csrf
    <form id="cadUsuario">
        <div class="row">
            <div class="col-4">
                <input type="text" class="form-control" id="exampleFormControlInput1 nome" name="Nome" placeholder="Nome" required>
                <input type="text" class="form-control labels" id="exampleFormControlInput1 email" name="Email" placeholder="Email" required>
            </div>
            <div class="col-4">
                <input type="data" class="form-control" id="exampleFormControlInput1 data" name="Data_Nascimento" placeholder="Data de Nascimento">
                <input type="password" class="form-control labels" id="exampleFormControlInput1 senha" name="Senha" placeholder="Senha" required minlength="8">
            </div>
        
        </div>
        <div class="row labels">
            <div class="col-4">
            <button type="submit" id="salvar" class="btn btn-outline-primary">Salvar</button>
            </div>
            <div class="col-4">
            <a href="/"><button type="button" class="btn btn-outline-warning">Cancelar</button></a>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {

        $('#salvar').on('click',function(e) {
            e.preventDefault()
            var nome = $('#nome').val();
            var email = $('#email').val();
            var data = $('#data').val();
            var senha = $('#senha').val();

            $.ajax({
                url: '/criar-novo-usuario',
                type: 'POST',
                headers:{
                    "_token": "{{ csrf_token() }}"
                },
                data:{
                    "_token": "{{ csrf_token() }}",
                    name:nome,
                    email:email,
                    data:data,
                    password:senha,
                },
                dataType:'json',

                success: function() {
                    alert('Usuário Cadastrado com sucesso!')
                },
                error: function name(res) {
                    alert('error')
                    console.log(res);
                }
            });
        });
    });
</script>
@endsection