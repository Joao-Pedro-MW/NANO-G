$(document).ready(function() {
    // Evento de mudança no toggle switch
    $('#switch_flag').change(function() {
        // Obtém o estado atual do switch
        var isChecked = this.checked;
        // Log quando o switch é ativado ou desativado
        if (isChecked) {
            $id_usuario = $('#switch_flag').val();
            /*$.ajax(
                {
                    url: 'http://localhost/usuarios/flag_usuario',
                    method: 'POST',
                    data: {
                        ID_USUARIO:,
                        FLAG_ATIVO: 1
                    },
                    dataType: 'json'
                }
            ).done(function(result)
                {
                    $('#un_medida').val(result["UNIDADE_NOME"]);
                }
            );*/
            console.log($id_usuario);
        } else {
            console.log("Desativado")
        }
    });
});