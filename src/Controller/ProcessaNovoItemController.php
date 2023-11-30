<?php

namespace src\Controller;

use src\Entity\Item;
use src\Repository\Itens\ItensRepository;

readonly class ProcessaNovoItemController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        $itemNome = htmlspecialchars(filter_input(INPUT_POST,'nome_item',FILTER_SANITIZE_SPECIAL_CHARS));
        $itemCategoria = htmlspecialchars(filter_input(INPUT_POST,'categoria_item',FILTER_SANITIZE_SPECIAL_CHARS));
        $itemUnidadeMedida = htmlspecialchars(filter_input(INPUT_POST,'unidade_medida_item',FILTER_SANITIZE_SPECIAL_CHARS));
        $novoItem = new Item($itemNome, $itemCategoria, $itemUnidadeMedida);
        $idUsuario = $_SESSION['ID_USUARIO'];
        $this->itensRepository->CriaItem($novoItem,$idUsuario);
        header('Location: /itens',false,303);
    }
}