<?php

namespace src\Controller;

use Couchbase\ValueRecorder;
use src\Repository\Usuario\UsuarioRepository;

class ProcessaLoginController implements Controller
{
    public function __construct(private readonly UsuarioRepository $usuarioRepository)
    {}

    public function processaRequisicao(): void
    {
        $usuarioEmail = filter_input(INPUT_POST, 'usuario', FILTER_VALIDATE_EMAIL);
        $UsuarioSenha = htmlspecialchars($_POST['senha_usuario']);
        $dadosDBLogin = $this->usuarioRepository->RetornaDadosLogin($usuarioEmail);
        if(count($dadosDBLogin) == 0){header('Location: /?erro');};
        $senhaCorreta = password_verify($UsuarioSenha, $dadosDBLogin['SENHA']);
        $flagDesativado = $dadosDBLogin['FLAG_ATIVO'] == 0;
        $primeiroLogin = $dadosDBLogin['LOGIN'] == 0;
        if ($flagDesativado) {
            header('Location: /?usuario_desativado');
            exit;
        }
        if (!$senhaCorreta) {
            header('Location: /?erro');
            exit;
        }
        $_SESSION['USUARIO'] = $dadosDBLogin['NOME'];
        $_SESSION['AUTENTICADO'] = true;
        $_SESSION['ID_USUARIO'] = $dadosDBLogin['ID_USUARIO'];
        $_SESSION['ATIVADO'] = $primeiroLogin;
        if ($primeiroLogin) {
            header('Location: /usuarios/troca_senha');
            exit;
        }
        header('Location: /');

    }
}
