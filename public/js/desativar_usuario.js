$(document).ready(function() {
    // Evento de mudança no switch
    $('.switch input[type="checkbox"]').change(function() {
        var isChecked = $(this).prop('checked');
        var id_usuario = $(this).data('dado-usuario');
        var nome_usuario = $(this).closest('.tab_usuario').find('.nome_usuario').text().trim();

        var url = isChecked ? 'http://localhost/usuarios/ativa_usuario' : 'http://localhost/usuarios/desativa_usuario';

        $.ajax({
            url: url,
            method: 'POST',
            data: {
                ID_USUARIO: id_usuario
            },
            dataType: 'text'
        }).done(function(response) {
            if (response.trim() === '') {
                var acao = isChecked ? 'ativado' : 'desativado';
                alert('Usuário ' + acao + ': ' + nome_usuario);
            } else {
                alert('Erro ao ' + (isChecked ? 'ativar' : 'desativar') + ' usuário');
            }
        }).fail(function(jqXHR, textStatus, errorThrown) {
            console.error('Erro na requisição AJAX:', textStatus, errorThrown);
            console.error('HTML retornado do servidor:', jqXHR.responseText);
        });
    });
});
