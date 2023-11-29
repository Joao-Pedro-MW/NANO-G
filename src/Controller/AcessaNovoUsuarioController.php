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
        if(!array_key_exists('ERRO_EMAIL_JA_EXISTENTE',$_SESSION)){
            $_SESSION['ERRO_EMAIL_JA_EXISTENTE'] = [];
        }
        require_once __DIR__ . '\..\..\src\Views\Usuarios\cria_usuario.php';
    }
}