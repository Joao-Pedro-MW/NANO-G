<?php

namespace src\Controller;
use src\Repository\Produtos\ProdutosRepository;

class ListarItemController implements Controller
{
    public function __construct(private ProdutosRepository $produtosRepository)
    {
    }

    public function processaRequisicao():void
    {
        $listaProdutos = $this->produtosRepository->TodosProdutos();
        require_once __DIR__ . '\..\..\src\Views\Item\menu_itens.php';
    }
}