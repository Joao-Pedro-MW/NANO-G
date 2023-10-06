<?php

declare(strict_types=1);

return [
    'GET|/usuarios' => \src\Controller\ListarUsuarioController::class,
    'GET|/usuario/remove_usuario' => \src\Controller\RemoveUsuarioController::class,
    'GET|/usuario/cria_usuario' => \src\Controller\NovoUsuarioController::class,
    'POST|/usuario/cria_usuario' => \src\Controller\NovoUsuarioController::class,
];
