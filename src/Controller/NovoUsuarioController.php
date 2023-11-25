<?php

namespace src\Controller;
use src\Entity\Usuario;
use src\Repository\Usuario\UsuarioRepository;

readonly class NovoUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $usuarioRepository)
    {
    }
    public function processaRequisicao(): void
    {
        if(array_key_exists('cpf',$_POST)){
            $UsuarioNome = htmlspecialchars(filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS));
            $UsuarioEmail = htmlspecialchars(filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS));
            $UsuarioDataNascimento = htmlspecialchars(filter_input(INPUT_POST,'data_nascimento',FILTER_SANITIZE_SPECIAL_CHARS));
            $UsuarioPermissao = htmlspecialchars(filter_input(INPUT_POST,'tipo_usuario',FILTER_SANITIZE_SPECIAL_CHARS));
            $UsuarioCPF = htmlspecialchars(filter_input(INPUT_POST,'cpf',FILTER_SANITIZE_SPECIAL_CHARS));
            $novoUsuario = new Usuario(
                $UsuarioNome,
                $UsuarioDataNascimento,
                $UsuarioPermissao,
                $UsuarioEmail,
                $UsuarioCPF,
                password_hash($UsuarioCPF,PASSWORD_ARGON2ID)
            );

            var_dump($_POST);
            $this->usuarioRepository->CriaUsuario($novoUsuario);
            header('Location: /usuarios',false,303);
        }
    }
}
