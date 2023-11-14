<?php

namespace src\Controller;

use src\Repository\Itens\ItensRepository;

readonly class AcessaLoteController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $listaItens = $this->itensRepository->TodosItens();
        $listaUnidadesMedida = $this->itensRepository->TodosUnidadesMedidas();
        $listaItensJSON = json_encode($listaItens);
        require_once __DIR__ . '\..\..\src\Views\Item\cadastro_lote.php';
    }
}