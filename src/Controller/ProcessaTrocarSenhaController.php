<?php

namespace src\Controller;

use src\Repository\Usuario\UsuarioRepository;

class ProcessaTrocarSenhaController implements Controller
{
    public function __construct(private readonly UsuarioRepository $usuarioRepository)
    {

    }
    public function processaRequisicao(): void
    {
        $idUsuario = $_SESSION['ID_USUARIO'];
        $senhaAtual =  htmlspecialchars($_POST['senha_atual']);
        $senhaNova = htmlspecialchars($_POST['nova_senha']);
        $senhaConfirmar = htmlspecialchars($_POST['confirma_senha']);

        $senhaDB = $this->usuarioRepository->RetornaSenha($idUsuario);
        if(password_verify($senhaAtual,$senhaDB) && $senhaNova === $senhaConfirmar ){
            $senhaConfirmar = password_hash($senhaConfirmar,PASSWORD_ARGON2ID);
            $this->usuarioRepository->AtualizaSenha($idUsuario,$senhaConfirmar);
            $this->usuarioRepository->AtivaLogin($idUsuario);
            $_SESSION = [];
            header('Location: /');
        } else {
            header('Location: /usuarios/troca_senha?erro');
        }
    }
}