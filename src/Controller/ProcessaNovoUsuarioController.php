<?php

namespace src\Controller;
use PDOException;
use src\Entity\Usuario;
use src\Repository\Usuario\UsuarioRepository;

readonly class ProcessaNovoUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $usuarioRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $_SESSION['ERRO_EMAIL_JA_EXISTENTE'] = [];
        if($_SESSION['PERMISSAO'] == 'CM'){
            header('Location: /');
            exit;
        }
        $idUsuario = $_SESSION['ID_USUARIO'];
        if (array_key_exists('cpf', $_POST)) {
            $UsuarioNome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            $UsuarioEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
            $UsuarioDataNascimento = filter_input(INPUT_POST, 'data_nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
            $UsuarioPermissao = filter_input(INPUT_POST, 'tipo_usuario', FILTER_SANITIZE_SPECIAL_CHARS);
            $UsuarioCPF = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
            $UsuarioSenha = password_hash(preg_replace('/[\.\-\s]/', '', $UsuarioCPF),PASSWORD_ARGON2ID);
            $novoUsuario = new Usuario(
                $UsuarioNome,
                $UsuarioDataNascimento,
                $UsuarioPermissao,
                $UsuarioEmail,
                $UsuarioCPF,
                $UsuarioSenha,
            );
            try {
                $this->usuarioRepository->CriaUsuario($novoUsuario,$idUsuario);
                header('Location: /usuarios', false, 303);
                $_SESSION['ERRO_EMAIL_JA_EXISTENTE'] = [];
                exit;
            } catch (PDOException $e){
                $_SESSION['ERRO_EMAIL_JA_EXISTENTE'] = true;
            }
            header('Location: /usuarios/cria_usuario');
        }
    }

}
