<?php

namespace src\Controller;

use src\Repository\Itens\ItensRepository;

readonly class AcessaItemController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $listaCategorias = $this->itensRepository->TodasCategorias();
        $listaUnidadesMedida = $this->itensRepository->TodosUnidadesMedidas();
        require_once __DIR__ . '\..\..\src\Views\Item\cadastro_item.php';
    }
}