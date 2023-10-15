<?php

namespace src\Controller;
use src\Entity\Usuario;
use src\Repository\Usuario\UsuarioRepository;

class NovoUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $usuarioRepository)
    {
    }
    public function processaRequisicao(): void
    {
        // Verifique se a solicitação é POST
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            require_once __DIR__ . '\..\..\src\Views\Usuarios\cria_usuario.php';
        }
        if(array_key_exists('cpf',$_POST)){
            $UsuarioNome = htmlspecialchars($_POST['nome']);
            $UsuarioEmail = htmlspecialchars($_POST['email']);
            $UsuarioDataNascimento = htmlspecialchars($_POST['data_nascimento']);
            $UsuarioPermissao = htmlspecialchars($_POST['tipo_usuario']); 
            $UsuarioCPF = filter_input(INPUT_POST, 'cpf', FILTER_VALIDATE_FLOAT);
            $novoUsuario = new Usuario(
                $UsuarioNome,
                $UsuarioDataNascimento,
                $UsuarioPermissao,
                $UsuarioEmail,
                $UsuarioCPF,
                123
            );
            $this->usuarioRepository->CriaUsuario($novoUsuario);
            header('Location: /usuarios',false,303);
        }
    }
}
