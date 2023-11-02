<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Entity\Item;
use src\Repository\Itens\ItensRepository;

class NovoItemController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        if($_SERVER["REQUEST_METHOD"] === "POST"){
            $itemNome = htmlspecialchars($_POST["nome_item"]);
            $itemCategoria = htmlspecialchars($_POST["categoria_item"]);
            $itemUnidadeMedida = htmlspecialchars($_POST["unidade_medida_item"]);
            $novoItem = new Item($itemNome, $itemCategoria, $itemUnidadeMedida);
            $this->itensRepository->CriaItem($novoItem);
            header('Location: /itens',false,303);
        } else {
            $listaCategorias = $this->itensRepository->ListaCategorias();
            $listaUnidadesMedida = $this->itensRepository->ListaUnidadesMedida();
            require_once __DIR__ . '\..\..\src\Views\Item\cadastro_item.php';
        }
    }
}