<?php

namespace src\Controller;
use src\Repository\Usuario\UsuarioRepository;

class EditaUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $UsuarioRepository)
    {
    }
    
    public function processaRequisicao(): void
    {   
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            if(!array_key_exists('id',$_GET)){
                header('Location: /usuarios');
            }
            $idUsuario = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
            if($idUsuario === false || $idUsuario === null){
                header('Location: /usuarios');;
            }
            $dadosUsuario = $this->UsuarioRepository->RetornaUsuario($idUsuario);
            require_once __DIR__ . '\..\..\src\Views\Usuarios\edita_usuario.php';
        }
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(array_key_exists('cpf',$_POST)){
                $usuarioID = htmlspecialchars($_REQUEST['id']);
                $UsuarioNome = htmlspecialchars($_POST['nome']);
                $UsuarioDataNascimento = htmlspecialchars($_POST['data_nascimento']);
                $UsuarioPermissao = htmlspecialchars($_POST['tipo_usuario']); 
                $UsuarioCPF = filter_input(INPUT_POST, 'cpf', FILTER_VALIDATE_FLOAT);
                $dadosUsuario = array(
                    'ID_USUARIO' => $usuarioID,
                    'NOME' => $UsuarioNome,
                    'DT_NASCIMENTO' => $UsuarioDataNascimento,
                    'TIPO_USUARIO' => $UsuarioPermissao,
                    'USER_LOGIN' => $UsuarioCPF
                );
                $this->UsuarioRepository->AtualizaUsuario($dadosUsuario);
                echo "<script>alert(\"Usuario $UsuarioNome atualizado com sucesso\")</script>";
                header('Location: /usuarios');
            } 
        }
    }
}