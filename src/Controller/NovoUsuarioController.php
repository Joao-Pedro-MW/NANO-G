<?php

namespace src\Controller;
use src\Repository\Usuario\UsuarioRepository;

class NovoUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $UsuarioRepository )
    {

    }
    public function processaRequisicao(): void
    {
        // not array -> retorna falso se vazio
        if($_GET){
        }
        require_once "..\src\Views\Usuarios\cria_usuario.php" ;
    
    }
}