$(document).ready(function() {

    $('tbody').empty()

    $.ajax({
        type: 'POST',
        dataType: 'JSON',
        assync: true,
        url: 'src/contato/modelo/list-contato.php',
        success: function(dados) {

            var registro = ''

            for (var i = 0; i < dados.length; i++) {

                registro += `
                    <tr>
                        <td class="text-center">${dados[i].ID}</td>
                        <td>${dados[i].NOME}</td>
                        <td class="text-center">${dados[i].TELEFONE}</td>
                        <td class="text-center">${dados[i].CELULAR}</td>
                        <td class="text-center">
                            <button class="btn btn-info btn-sm">Visualizar</button>
                            <button class="btn btn-primary btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                `


            }

            $('tbody').append(registro)
        }
    })

})