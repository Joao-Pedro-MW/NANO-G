<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Repository\Itens\ItensRepository;

class RemoveItemController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $id_usuario = filter_input(INPUT_GET,'id_item',FILTER_VALIDATE_INT);
        $usuarioLista = $this->itensRepository->RemoveItem($id_usuario);
        if($usuarioLista){
            echo "<script>Usuário removido com sucesso!</script>";
        }
    }
}