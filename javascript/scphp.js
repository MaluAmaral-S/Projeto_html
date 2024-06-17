
$(document).ready(function(){
    $('#Enviar').click (function(){
        var user = $('#inome').val();
        var comment = $('#icomentario').val();
        $.ajax ({
            url : 'form.php',
            type: 'POST',
            data: {
                u: user,
                c:comment
            },
        })
   })
})