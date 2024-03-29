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
        if ($_SESSION['PERMISSAO'] == 'CM') {
            header('Location: /');
            exit;
        }
        $usuarioID = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $UsuarioNome = trim(htmlspecialchars(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS)),"\n\r\t\v\x00");
        $UsuarioEmail = trim(htmlspecialchars(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS)),"\n\r\t\v\x00");
        $UsuarioDataNascimento = htmlspecialchars(filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_SPECIAL_CHARS));
        $UsuarioPermissao = htmlspecialchars(filter_input(INPUT_POST, 'tipo_usuario', FILTER_SANITIZE_SPECIAL_CHARS));
        $UsuarioCPF = htmlspecialchars(filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS));
        $id_editor = $_SESSION['ID_USUARIO'];
        $dadosUsuario = [
            'ID_USUARIO' => $usuarioID,
            'NOME' => $UsuarioNome,
            'CPF' => $UsuarioCPF,
            'DT_NASCIMENTO' => $UsuarioDataNascimento,
            'TIPO_USUARIO' => $UsuarioPermissao,
            'EMAIL' => $UsuarioEmail
        ];
        $resultado = $this->usuarioRepository->AtualizaUsuario($dadosUsuario,$id_editor);

        if (!$resultado) {
            echo 'Falha na atualização. Contate o suporte.';
        }
        header('Location: /usuarios');
    }
}
