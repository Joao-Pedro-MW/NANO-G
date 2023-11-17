<?php

declare(strict_types=1);

return [
    //Item
    'GET|/itens' => \src\Controller\ListarItemController::class,

    'GET|/itens/cadastro_lote' => \src\Controller\AcessaLoteController::class,
    'POST|/itens/cadastro_lote' => \src\Controller\NovoLoteController::class,

    'GET|/itens/cadastro_item' => \src\Controller\AcessaItemController::class,
    'POST|/itens/cadastro_item' => \src\Controller\NovoItemController::class,

    'GET|/itens/edita_item' => \src\Controller\AcessaEditaItemController::class,
    'POST|/itens/edita_item' => \src\Controller\EditaItemController::class,

    'GET|/itens/remove_item' => \src\Controller\RemoveItemController::class,




    // Usuarios
    'GET|/usuarios' => \src\Controller\ListarUsuarioController::class,
    'GET|/usuarios/remove_usuario' => \src\Controller\RemoveUsuarioController::class,

    'GET|/usuarios/cria_usuario' => \src\Controller\AcessaNovoUsuarioController::class,
    'POST|/usuarios/cria_usuario' => \src\Controller\NovoUsuarioController::class,

    'GET|/usuarios/edita_usuario' => \src\Controller\AcessaEditaUsuarioController::class,
    'POST|/usuarios/edita_usuario' => \src\Controller\EditaUsuarioController::class,

    'GET|/login/troca_senha' => \src\Controller\AcessaTrocaSenhaController::class,

    //Logs
    'GET|/logs' => \src\Controller\ListarLogController::class,
    //Estoque
    'GET|/itens/remocao'=> \src\Controller\ListarSaidaController::class,
    'POST|/itens/remocao' => \src\Controller\ProcessaSaidaController::class,
    'GET|/itens/exclusao_lote' => \src\Controller\ListarExcluirLote::class,
    'GET|/itens/excluir_lote' => \src\Controller\ProcessaRemoverLoteController::class,

    //Login
    'GET|/'=> \src\Controller\AcessaLoginController::class,
    'POST|/'=> \src\Controller\ProcessaLoginController::class,
    'GET|/logout'=> \src\Controller\LogoutController::class,

    //API AJAX
    'POST|/itens/consulta_un_medida' => \src\Controller\ConsultaUnidadeMedidaController::class,
    ];
