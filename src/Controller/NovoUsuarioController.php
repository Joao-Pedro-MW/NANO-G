<?php

namespace src\Controller;
use src\Repository\Usuario\UsuarioRepository;

class NovoUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $UsuarioRepository)
    {

    }

    public function processaRequisicao(): void
    {
        var_dump($_REQUEST);
        // Verifique se a solicitação é POST
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            require_once __DIR__ . "\..\..\src\Views\Usuarios\cria_usuario.php";
        } else {
            var_dump($_POST);
        }
        //

    }
}