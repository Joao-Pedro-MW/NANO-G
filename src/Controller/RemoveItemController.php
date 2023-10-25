<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Repository\Produtos\ProdutosRepository;

class RemoveItemController implements Controller
{
    public function __construct(private ProdutosRepository $produtosRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $id_usuario = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
        $usuarioLista = $this->produtosRepository->RemoveItem($id_usuario);
        if($usuarioLista){
            echo "<script>Usuário removido com sucesso!</script>";
        }
        header('Location: /produtos');
    }
}