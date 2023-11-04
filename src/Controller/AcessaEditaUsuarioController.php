<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Repository\Usuario\UsuarioRepository;

class AcessaEditaUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $UsuarioRepository)
    {
    }
    public function processaRequisicao(): void
    {
        if(!array_key_exists('id',$_GET)){
            header('Location: /usuarios');
        }
        $idUsuario = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
        if($idUsuario === false || $idUsuario === null){
            header('Location: /usuarios');;
        }
        $dadosUsuario = $this->UsuarioRepository->RetornaUsuario($idUsuario);
        require_once __DIR__ . '\..\..\src\Views\Usuarios\edita_usuario.php';
    }
}