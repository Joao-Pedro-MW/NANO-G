<?php

namespace src\Controller;
use src\Repository\Usuario\UsuarioRepository;

class AtivaUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $usuarioRepository)
    {

    }
    public function processaRequisicao(): void
    {
        $idUsuario = filter_input(INPUT_POST, 'ID_USUARIO', FILTER_VALIDATE_INT);
        if ($idUsuario) {
            $this->usuarioRepository->AtivaUsuario($idUsuario);
        }
    }
}