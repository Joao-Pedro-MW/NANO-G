<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Repository\Usuario\UsuarioRepository;

class AcessaTrocaSenhaController implements Controller
{
    public function processaRequisicao(): void
    {
        require_once __DIR__ . '\..\..\src\Views\Usuarios\troca_senha.php';
    }
}