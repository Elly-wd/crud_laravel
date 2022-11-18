$(document).ready(function() {
    $('#').click(function() {

        var nome = $('#nome').val();
        var email = $('#email').val();
        var data = $('#data').val();
        var senha = $('#senha').val();
    

        $.ajax({
            url: '/criar-novo-usuario',
            type: 'POST',
            data:{
                "_token": "{{ csrf_token() }}",
                nome:nome,
                email:email,
                data:data,
                senha:senha,
            },
            dataType:'json',

            success: function() {
                alert('Usuário Cadastrado com sucesso!')
            },
            error: function name() {
                alert('error')
            }
        });

        return false;
    });
});