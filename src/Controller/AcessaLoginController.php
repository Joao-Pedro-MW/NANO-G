<?php

namespace src\Controller;

use src\Repository\Usuario\UsuarioRepository;

class AcessaLoginController implements Controller
{

    public function processaRequisicao(): void
    {
        if(array_key_exists('autenticado',$_SESSION) && $_SESSION['autenticado']=== true){
            header('Location: /itens');
        }
        require_once __DIR__ . '\..\..\src\login.php';
    }
}