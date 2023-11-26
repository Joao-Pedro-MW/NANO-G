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
        $listaCategorias = $this->itensRepository->TodasCategorias();
        $listaUnidadeMedida = $this->itensRepository->TodosUnidadesMedidas();
        foreach ($listaItens as $index_item => $item){
            foreach ($listaUnidadeMedida as $unidade_medida) {
                if($item["ID_UN_MEDIDA"] === $unidade_medida["ID_UNIDADE_MEDIDA"]){
                    $listaItens[$index_item]["NOME_UN_MEDIDA"] = $unidade_medida["UNIDADE_NOME"];
                }
            }
            foreach ($listaCategorias as $index_categoria => $categoria){
                if($item["ID_CATEGORIA"] === $categoria["ID_CATEGORIA"]){
                    $listaItens[$index_item]["NOME_CATEGORIA"] = $categoria["CATEGORIA_NOME"];
                }
            }
        }
        require_once __DIR__ . '\..\..\src\Views\Item\menu_itens.php';
    }

}