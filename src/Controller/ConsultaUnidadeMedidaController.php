<?php

namespace src\Controller;

use src\Repository\Itens\ItensRepository;

readonly class ConsultaUnidadeMedidaController
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }

    public function processaRequisicao(): void {
        $idItem = filter_input(INPUT_POST, 'idItem', FILTER_VALIDATE_INT);
        $unidadeMedidaItem = json_encode($this->itensRepository->GetUnidadeMedidaPorId($idItem));
        echo $unidadeMedidaItem;
    }
}
