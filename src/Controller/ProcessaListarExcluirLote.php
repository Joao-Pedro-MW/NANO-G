<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Repository\Itens\ItensRepository;

class ProcessaListarExcluirLote implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {

    }

    public function processaRequisicao(): void
    {
        $listaLotes = $this->itensRepository->TodosLotes();
        $listaItens = $this->itensRepository->TodosItens();
        $listaCategorias = $this->itensRepository->TodasCategorias();
        $listaUnidadesMedida = $this->itensRepository->TodosUnidadesMedidas();
        foreach ($listaLotes as $index_lote => $lote){
            foreach ($listaItens as $index_item => $item) {
                if ($lote["ID_ITEM"] === $item["ID_ITEM"]) {
                    $listaLotes[$index_lote]['NOME_ITEM'] = $item['ITEM_NOME'];
                    $itemUnidadeMedida = $item["ID_UN_MEDIDA"];
                    $itemCategoria = $item["ID_CATEGORIA"];
                }
            }
            foreach ($listaCategorias as $categoria){
                if($itemCategoria === $categoria["ID_CATEGORIA"]){
                    $listaLotes[$index_lote]["CATEGORIA"] = $categoria["CATEGORIA_NOME"];
                    break;
                }
            }
            foreach ($listaUnidadesMedida as $unidade_medida){
                if($itemUnidadeMedida === $unidade_medida["ID_UNIDADE_MEDIDA"]){
                    $listaLotes[$index_lote]["UNIDADE_MEDIDA"] = $unidade_medida["UNIDADE_NOME"];
                    break;
                }
            }
        }
        require_once __DIR__ . '\..\..\src\Views\Remocao\remocao_lote.php';
    }
}