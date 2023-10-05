<?php

declare(strict_types=1);

return [
    'GET|/usuarios' => \src\Controller\ListarUsuarioController::class,
    'POST|/usuarios/remove_usuario' => \src\Controller\RemoveUsuarioController::class
];
