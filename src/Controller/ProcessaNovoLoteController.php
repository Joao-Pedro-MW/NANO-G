<?php

namespace src\Controller;

use src\Entity\Lote;
use src\Repository\Itens\ItensRepository;

readonly class ProcessaNovoLoteController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }

    public function processaRequisicao(): void
    {
        $idUsuario = $_SESSION['ID_USUARIO'];
        $itemId = (int) htmlspecialchars(filter_input(INPUT_POST,'item',FILTER_VALIDATE_INT));
        $quantidadeItem = (int) htmlspecialchars(filter_input(INPUT_POST,'quantidade',FILTER_VALIDATE_INT));
        $valorItem = (int) htmlspecialchars(filter_input(INPUT_POST,'valor',FILTER_VALIDATE_INT));
        $dataValidadeItem = preg_match('/^([1-2][0-9]{3}\-[0-9]{2}\-[0-9]{2})$/', htmlspecialchars($_POST['data_validade'])) ? $_POST['data_validade'] : "";
        $loteItem = (int) htmlspecialchars(filter_input(INPUT_POST,'lote',FILTER_VALIDATE_INT));
        $novoLote = new Lote($itemId,$quantidadeItem,$valorItem,$dataValidadeItem,$loteItem);
        $this->itensRepository->CriaLote($novoLote,$idUsuario);
        header("Location: /itens/remocao");
        exit;
    }
}