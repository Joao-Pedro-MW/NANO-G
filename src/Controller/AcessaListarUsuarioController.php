<?php

namespace src\Controller;
use src\Repository\Usuario\UsuarioRepository;

readonly class AcessaListarUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $usuarioRepository)
    {
    }
    public function processaRequisicao(): void
    {
        if($_SESSION['PERMISSAO'] == 'CM'){
            header('Location: /');
            exit;
        }
        $_SESSION['ERRO_EMAIL_JA_EXISTENTE'] = [];
        $usuarioLista = $this->usuarioRepository->TodosUsuarios();
        require_once __DIR__ . '\..\..\src\Views\Usuarios\menu_usuario.php';
    }
}