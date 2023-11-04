<?php

namespace src\Controller;

use Couchbase\ValueRecorder;
use src\Controller\Controller;
use src\Entity\Item;
use src\Repository\Itens\ItensRepository;

class EditaItemController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $itemId = htmlspecialchars($_GET['item']);
        $itemNome = htmlspecialchars($_POST["nome_item"]);
        $itemCategoria = htmlspecialchars($_POST["categoria_item"]);
        $itemUnidadeMedida = htmlspecialchars($_POST["unidade_medida_item"]);
        $novoItem = new Item($itemNome, $itemCategoria, $itemUnidadeMedida);
        $this->itensRepository->AtualizaItem($itemId, $novoItem);
        header('Location: /itens',false,303);
    }
}