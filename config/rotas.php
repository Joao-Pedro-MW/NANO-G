<?php

declare(strict_types=1);

return [
    //Item
    'GET|/itens' => \src\Controller\ListarItemController::class,
    'GET|/itens/cadastro_lote' => \src\Controller\NovoLoteController::class,
    'POST|/itens/cadastro_lote' => \src\Controller\NovoLoteController::class,
    'GET|/itens/cadastro_item' => \src\Controller\NovoItemController::class,
    'GET|/itens/remove_item' => \src\Controller\RemoveItemController::class,

    // Usuarios
    'GET|/usuarios' => \src\Controller\ListarUsuarioController::class,
    'GET|/usuarios/remove_usuario' => \src\Controller\RemoveUsuarioController::class,
    'GET|/usuarios/cria_usuario' => \src\Controller\NovoUsuarioController::class,
    'POST|/usuarios/cria_usuario' => \src\Controller\NovoUsuarioController::class,
    'GET|/usuarios/edita_usuario' => \src\Controller\EditaUsuarioController::class,
    'POST|/usuarios/edita_usuario' => \src\Controller\EditaUsuarioController::class,
    'GET|/produtos' => \src\Controller\ListarItemController::class,

    //Logs
    'GET|/logs' => \src\Controller\ListarLogController::class,
    //Estoque
    'GET|/remocao'=> \src\Controller\ListarSaidaController::class,

    //Login
    'GET|/'=> \src\Controller\LoginController::class,
    ];