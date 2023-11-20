<?php

namespace src\Controller;

use Couchbase\ValueRecorder;
use src\Controller\Controller;
use src\Repository\Usuario\UsuarioRepository;

class ProcessaLoginController implements Controller
{
    public function __construct(private UsuarioRepository $usuarioRepository)
    {}
    public function processaRequisicao(): void
    {

        $usuarioEmail = filter_input(INPUT_POST,'usuario',FILTER_VALIDATE_EMAIL);
        $Usuariosenha = htmlspecialchars($_POST['senha_usuario']);
        $dadosDBLogin = $this->usuarioRepository->RetornaDadosLogin($usuarioEmail);
        if(!array_key_exists('FLAG_ATIVO',$dadosDBLogin)){
            header('Location: /?usuario_desativado');
            exit;
        }
        $senhaCorreta = password_verify($Usuariosenha,$dadosDBLogin['SENHA']);
        if(!$senhaCorreta)
        {
            header('Location: /?erro');
            exit;
        }
        //$_SESSION['ATIVO'] = $dadosDBLogin[""];
        $_SESSION['USUARIO'] = $dadosDBLogin['NOME'];
        $_SESSION['AUTENTICADO'] = true;
        header('Location: /');
    }
}