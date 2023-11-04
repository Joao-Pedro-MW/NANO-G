
    $('#item').on('change', function()
    {
        var idItem = $('#item').children(":selected").attr("id");
        $.ajax(
            {
            url: 'http://localhost/itens/consulta_un_medida',
            method: 'POST',
            data: { idItem: idItem },
            dataType: 'json'
            }
        ).done(function(result)
            {
                $('#un_medida').val(result["UNIDADE_NOME"]);
            }
        );
    });
