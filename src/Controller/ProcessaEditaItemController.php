<?php

namespace src\Controller;

use src\Entity\Item;
use src\Repository\Itens\ItensRepository;

readonly class ProcessaEditaItemController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $itemId = htmlspecialchars($_GET['item']);
        $itemNome = trim(htmlspecialchars($_POST["nome_item"]),"\n\r\t\v\x00");
        $itemCategoria = htmlspecialchars($_POST["categoria_item"]);
        $itemUnidadeMedida = htmlspecialchars($_POST["unidade_medida_item"]);
        $novoItem = new Item($itemNome, $itemCategoria, $itemUnidadeMedida);
        $idUsuario = $_SESSION['ID_USUARIO'];
        $this->itensRepository->AtualizaItem($itemId, $novoItem,$idUsuario);
        header('Location: /itens',false,303);
    }
}