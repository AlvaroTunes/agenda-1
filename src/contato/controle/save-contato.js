$(document).ready(function() {

    $('.btn-save').click(function(e) {
        e.preventDefault()

        var dados = $('#add-contato').serialize()

        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: 'src/contato/modelo/save-contato.php',
            success: function(dados) {

            }
        })
    })

})