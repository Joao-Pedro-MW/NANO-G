<?php

namespace src\Controller;

use src\Repository\Itens\ItensRepository;

readonly class AcessaEditaItemController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $itemId = htmlspecialchars($_GET['item']);
        $dadosItem = $this->itensRepository->RetornaItem($itemId);
        $listaCategorias = $this->itensRepository->TodasCategorias();
        $listaUnidadesMedida = $this->itensRepository->TodosUnidadesMedidas();
        require_once __DIR__ . '\..\..\src\Views\Item\edita_item.php';
    }
}