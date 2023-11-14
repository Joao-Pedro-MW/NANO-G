<?php

namespace src\Controller;

use src\Repository\Usuario\UsuarioRepository;

class AcessaLoginController implements Controller
{

    public function processaRequisicao(): void
    {
        if(array_key_exists('AUTENTICADO',$_SESSION) && $_SESSION['AUTENTICADO']=== true){
            header('Location: /itens/remocao');
        }
        require_once __DIR__ . '\..\..\src\login.php';
    }
}