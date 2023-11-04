
    $('#itens').on('change', function() {
        var idItem = $('#itens').children(":selected").attr("id");
        console.log(idItem);
        $.ajax({
            url: 'http://localhost/itens/consulta_un_medida',
            method: 'POST',
            data: { idItem: idItem },
            dataType: 'json'
        }).done(function(result) {
            //necessario alterar o value da variáveis, não apenas o nome
            $('#un_medida').val(result.attr("value")["UNIDADE_NOME"]);
            console.log(result);
        });
    });
