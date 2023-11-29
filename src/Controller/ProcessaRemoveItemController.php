<?php

namespace src\Controller;

use src\Repository\Itens\ItensRepository;

readonly class ProcessaRemoveItemController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $IdItem = filter_input(INPUT_GET,'item',FILTER_VALIDATE_INT);
        $operacao = $this->itensRepository->RemoveItem($IdItem);
        header('Location: /itens');
    }
}