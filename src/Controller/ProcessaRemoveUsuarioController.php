<?php

namespace src\Controller;
use src\Repository\Usuario\UsuarioRepository;

readonly class ProcessaRemoveUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $usuarioRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $id_usuario = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
        $id_editor = $_SESSION['ID_USUARIO'];
        $this->usuarioRepository->RemoveUsuario($id_usuario,$id_editor);
        header('Location: /usuarios');
    }
}
