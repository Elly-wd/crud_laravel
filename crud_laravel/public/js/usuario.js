

$(document).ready(function() {

    //Envia os dados do Form para o Controller de cadastro
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#salvar').on('click',function(e) {
       
        e.preventDefault();

        var nome = $('#nome').val();
        var email = $('#email').val();
        var data = $('#data').val();
        var senha = $('#senha').val();

        $.ajax({
            url: '/criar-novo-usuario',
            type: 'POST',
            dataType:'json',
            data:{
              //  token: token,
                nome:nome,
                email:email,
                data:data,
                senha:senha,
            },

            success: function() {
                
            },
            error: function() {
                alert(error)
            }
        });

        return false;
    });
});