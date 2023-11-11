<?php

namespace src\Controller;
use Couchbase\ValueRecorder;
use src\Repository\Itens\ItensRepository;

class ListarSaidaController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }

    public function processaRequisicao(): void
    {
        $listaLotes = $this->itensRepository->TodosLotes();
        $listaItens = $this->itensRepository->TodosItens();
        $listaUnidadesMedida = $this->itensRepository->ListaUnidadesMedida();
        foreach ($listaLotes as $index => $lote){
            foreach ($listaItens as $item) {
                if ($lote["ID_ITEM"] === $item["ID_ITEM"]) {
                    $itemNome = $item['ITEM_NOME'];
                    $itemUnidadeMedida = $item["ID_UN_MEDIDA"];
                    $listaLotes[$index]['NOME_ITEM'] = $itemNome;
                }
            }
            foreach ($listaUnidadesMedida as $unidade_medida){
                if($itemUnidadeMedida === $unidade_medida["ID_UNIDADE_MEDIDA"]){
                    $unidade_medidaLote = $unidade_medida["UNIDADE_NOME"];
                    $listaLotes[$index]["UNIDADE_MEDIDA"] = $unidade_medidaLote;
                    break;
                }
            }
        }
        require_once __DIR__ . '\..\..\src\Views\Remocao\remocao_item.php';
    }
}