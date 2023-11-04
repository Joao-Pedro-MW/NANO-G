
    $('#itens').on('change', function() {
        var idItem = $('#itens').children(":selected").attr("id");
        console.log(idItem);
        $.ajax({
            url: 'http://localhost/itens/consulta_un_medida',
            method: 'POST',
            data: { idItem: idItem },
            dataType: 'json'
        }).done(function(result) {

            $('#un_medida').val(result["UNIDADE_NOME"]);
            console.log(result);
        });
    });
