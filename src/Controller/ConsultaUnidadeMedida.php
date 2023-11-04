<?php

namespace src\Controller;

use src\Repository\Itens\ItensRepository;

class ConsultaUnidadeMedida
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }

    public function processaRequisicao(): void {
        $idItem = filter_input(INPUT_POST, 'idItem', FILTER_VALIDATE_INT); // Altere para INPUT_POST
        $unidadeMedidaItem = json_encode($this->itensRepository->GetUnidadeMedidaPorId($idItem));
        echo $unidadeMedidaItem; // Certifique-se de imprimir a resposta para que o JavaScript possa acessá-la
    }
}
