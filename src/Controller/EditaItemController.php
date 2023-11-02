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
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $itemId = htmlspecialchars($_GET['item']);
            $itemNome = htmlspecialchars($_POST["nome_item"]);
            $itemCategoria = htmlspecialchars($_POST["categoria_item"]);
            $itemUnidadeMedida = htmlspecialchars($_POST["unidade_medida_item"]);
            $novoItem = new Item($itemNome, $itemCategoria, $itemUnidadeMedida);
            $this->itensRepository->AtualizaItem($itemId, $novoItem);
            header('Location: /itens',false,303);
        }
        $itemId = htmlspecialchars($_GET['item']);
        $dadosItem = $this->itensRepository->RetornaItem($itemId);
        $listaCategorias = $this->itensRepository->ListaCategorias();
        $listaUnidadesMedida = $this->itensRepository->ListaUnidadesMedida();
        require_once __DIR__ . '\..\..\src\Views\Item\edita_item.php';
    }
}