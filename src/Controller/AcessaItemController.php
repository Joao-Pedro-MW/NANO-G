<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Repository\Itens\ItensRepository;

class AcessaItemController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $listaCategorias = $this->itensRepository->ListaCategorias();
        $listaUnidadesMedida = $this->itensRepository->ListaUnidadesMedida();
        require_once __DIR__ . '\..\..\src\Views\Item\cadastro_item.php';
    }
}