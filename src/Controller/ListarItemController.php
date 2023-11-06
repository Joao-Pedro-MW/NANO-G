<?php

namespace src\Controller;
use src\Repository\Itens\ItensRepository;

readonly class ListarItemController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }

    public function processaRequisicao():void
    {
        $listaItens = $this->itensRepository->TodosItens();
        require_once __DIR__ . '\..\..\src\Views\Item\menu_itens.php';
    }

}