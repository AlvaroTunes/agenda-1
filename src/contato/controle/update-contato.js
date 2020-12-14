$(document).ready(function() {

    $('.btn-update').click(function(e) {
        e.preventDefault()

        var dados = $('#add-contato').serialize()

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: 'src/contato/modelo/update-contato.php',
            success: function(dados) {
                if (dados.return == true) {
                    alert('Contato foi atualizado com sucesso!')
                    $('#add-contato').val('')
                    $('#formulario').empty()
                } else {
                    alert('Não foi possível cadastrar o contato.. :(')
                }
            }
        })
    })

})