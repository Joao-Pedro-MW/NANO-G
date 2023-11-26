<?php

namespace src\Controller;
use src\Repository\Usuario\UsuarioRepository;

readonly class ProcessaEditarUsuarioController implements Controller
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
        $usuarioID = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
        $UsuarioNome = htmlspecialchars(filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS));
        $UsuarioEmail = htmlspecialchars(filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS));
        $UsuarioDataNascimento = htmlspecialchars(filter_input(INPUT_POST,'data_nascimento',FILTER_SANITIZE_SPECIAL_CHARS));
        $UsuarioPermissao = htmlspecialchars(filter_input(INPUT_POST,'tipo_usuario',FILTER_SANITIZE_SPECIAL_CHARS));
        $UsuarioCPF = htmlspecialchars(filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_SPECIAL_CHARS));
        $dadosUsuario = array(
            'ID_USUARIO' => $usuarioID,
            'NOME' => $UsuarioNome,
            'CPF' => $UsuarioCPF,
            'DT_NASCIMENTO' => $UsuarioDataNascimento,
            'TIPO_USUARIO' => $UsuarioPermissao,
            'EMAIL' => $UsuarioEmail
        );
        $this->usuarioRepository->AtualizaUsuario($dadosUsuario);
        header('Location: /usuarios');
    }
}