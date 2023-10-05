<?php

namespace src\Controller;

class RemoveUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $usuarioRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $id_usuario = filter_input(INPUT_POST,'id',FILTER_VALIDATE_INT);
        $usuarioLista = $this->usuarioRepository->RemoveUsuario($id_usuario);
        require_once __DIR__ . '\..\..\src\Views\Usuarios\menu_usuario.php';
    }
}