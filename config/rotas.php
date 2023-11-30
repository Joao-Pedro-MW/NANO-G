<?php

declare(strict_types=1);

return [
    //Login
    'GET|/usuarios/troca_senha' => \src\Controller\AcessaTrocaSenhaController::class,
    'POST|/usuarios/troca_senha' => \src\Controller\ProcessaTrocarSenhaController::class,
    //Item
    'GET|/itens' => \src\Controller\ListarItemController::class,
    'GET|/itens/cadastro_item' => \src\Controller\AcessaItemController::class,
    'POST|/itens/cadastro_item' => \src\Controller\ProcessaNovoItemController::class,

    'GET|/itens/edita_item' => \src\Controller\AcessaEditaItemController::class,
    'POST|/itens/edita_item' => \src\Controller\ProcessaEditaItemController::class,

    'GET|/itens/remove_item' => \src\Controller\ProcessaRemoveItemController::class,

    // Usuarios
    'GET|/usuarios' => \src\Controller\AcessaListarUsuarioController::class,
    'GET|/usuarios/remove_usuario' => \src\Controller\ProcessaRemoveUsuarioController::class,

    'GET|/usuarios/cria_usuario' => \src\Controller\AcessaNovoUsuarioController::class,
    'POST|/usuarios/cria_usuario' => \src\Controller\ProcessaNovoUsuarioController::class,

    'GET|/usuarios/edita_usuario' => \src\Controller\AcessaEditaUsuarioController::class,
    'POST|/usuarios/edita_usuario' => \src\Controller\ProcessaEditarUsuarioController::class,
    //Logs
    'GET|/logs' => \src\Controller\AcessaListarLogController::class,
    //Estoque
    'GET|/itens/remocao'=> \src\Controller\ProcessaListarSaidaController::class,
    'POST|/itens/remocao' => \src\Controller\ProcessaSaidaController::class,
    'GET|/itens/exclusao_lote' => \src\Controller\ProcessaListarExcluirLote::class,
    'GET|/itens/excluir_lote' => \src\Controller\ProcessaRemoverLoteController::class,
    'GET|/itens/lotes' => \src\Controller\AcessaLotesController::class,
    'GET|/itens/cadastro_lote' => \src\Controller\AcessaNovoLoteController::class,
    'POST|/itens/cadastro_lote' => \src\Controller\ProcessaNovoLoteController::class,

    //Login
    'GET|/'=> \src\Controller\AcessaLoginController::class,
    'POST|/'=> \src\Controller\ProcessaLoginController::class,
    'GET|/logout'=> \src\Controller\LogoutController::class,

    //API AJAX
    'POST|/itens/consulta_un_medida' => \src\Controller\ConsultaUnidadeMedidaController::class,
    'POST|/usuarios/desativa_usuario' => \src\Controller\ConsultaDesativaUsuarioController::class,
    'POST|/usuarios/ativa_usuario' => \src\Controller\ConsultaAtivaUsuarioController::class,
    ];
