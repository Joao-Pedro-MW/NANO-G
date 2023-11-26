<?php

namespace src\Controller;

class AcessaNovoUsuarioController implements Controller
{

    public function processaRequisicao(): void
    {
        if($_SESSION['PERMISSAO'] == 'CM'){
            header('Location: /');
            exit;
        }
        require_once __DIR__ . '\..\..\src\Views\Usuarios\cria_usuario.php';
    }
}