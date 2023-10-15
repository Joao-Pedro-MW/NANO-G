<?php

namespace src\Controller;
use src\Repository\Usuario\UsuarioRepository;

class RemoveUsuarioController implements Controller
{
    public function __construct(private UsuarioRepository $usuarioRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $id_usuario = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
        $usuarioLista = $this->usuarioRepository->RemoveUsuario($id_usuario);
        if($usuarioLista){
            echo "<script>Usuário removido com sucesso!</script>";
        }
        $usuarioLista = $this->usuarioRepository->TodosUsuarios();
        header('Location: /usuarios');
    }
}
