$(document).ready(function() {
    $('#salvar').click(function() {

        var nome = $('#nome').val();
        var email = $('#email').val();
        var data = $('#data').val();
        var senha = $('#senha').val();
    

        $.ajax({
            type: 'post',
            data:{
                "_token": "{{ csrf_token() }}",
                nome:nome,
                email:email,
                data:data,
                senha:senha,
              },
            url: 'http://127.0.0.1:8000/criar-novo-usuario',
            async: true,

            success: function(response) {
                alert('Usuário Cadastrado com sucesso!')
            },
            error: function name() {
                alert('error')
            }
        });

        return false;
    });
});