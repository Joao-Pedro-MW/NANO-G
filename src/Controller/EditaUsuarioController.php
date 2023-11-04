<?php

namespace src\Controller;
use src\Repository\Usuario\UsuarioRepository;

class EditaUsuarioController implements Controller
{

    
    public function processaRequisicao(): void
    {
        if(array_key_exists('cpf',$_POST)){
        $usuarioID = htmlspecialchars($_REQUEST['id']);
        $UsuarioNome = htmlspecialchars($_POST['nome']);
        $UsuarioEmail = htmlspecialchars($_POST['email']);
        $UsuarioDataNascimento = htmlspecialchars($_POST['data_nascimento']);
        $UsuarioPermissao = htmlspecialchars($_POST['tipo_usuario']);
        $UsuarioCPF = filter_input(INPUT_POST, 'cpf', FILTER_VALIDATE_FLOAT);
        $dadosUsuario = array(
            'ID_USUARIO' => $usuarioID,
            'NOME' => $UsuarioNome,
            'CPF' => $UsuarioCPF,
            'DT_NASCIMENTO' => $UsuarioDataNascimento,
            'TIPO_USUARIO' => $UsuarioPermissao,
            'EMAIL' => $UsuarioEmail
        );
        $this->UsuarioRepository->AtualizaUsuario($dadosUsuario);
        header('Location: /usuarios');
        }
    }
}