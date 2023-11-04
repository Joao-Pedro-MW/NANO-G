<?php

namespace src\Controller;

use Couchbase\ValueRecorder;
use src\Repository\Itens\ItensRepository;
use src\Repository\UnidadesMedida\UnidadesMedidaRepository;

class NovoLoteController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }

    public function processaRequisicao(): void
    {
        var_dump($_POST);
        $itemId = htmlspecialchars(filter_input(INPUT_POST,'item',FILTER_VALIDATE_INT));
        $quantidadeItens = htmlspecialchars(filter_input(INPUT_POST,'quantidade',FILTER_VALIDATE_INT));
        $valorItem = htmlspecialchars(filter_input(INPUT_POST,'valor',FILTER_VALIDATE_INT));
        $dataValidadeItem = preg_match('/^(2[0-9]{3}\-[0-9]{2}\-[0-9]{2})$/', htmlspecialchars($_POST['data_validade'])) ? $_POST['data_validade'] : "";
        $loteItem = htmlspecialchars(filter_input(INPUT_POST,'lote',FILTER_VALIDATE_INT));
        var_dump($itemId);
        var_dump($quantidadeItens);
        var_dump($valorItem);
        var_dump($dataValidadeItem);
        var_dump($loteItem);
    }
}