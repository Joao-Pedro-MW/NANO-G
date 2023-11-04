<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Repository\Itens\ItensRepository;

class AcessaLoteController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $listaItens = $this->itensRepository->TodosItens();
        $listaUnidadesMedida = $this->itensRepository->ListaUnidadesMedida();
        $listaItensJSON = json_encode($listaItens);
        require_once __DIR__ . '\..\..\src\Views\Item\cadastro_lote.php';
    }
}