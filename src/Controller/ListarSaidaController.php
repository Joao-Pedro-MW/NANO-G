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
        foreach ($listaLotes as $chave=>$lote){
            foreach ($listaItens as $item){
                if($lote["ID_ITEM"] === $item["id_unidade_medida"]){
                    //pegamos o nome do item conforme o ID de item do lote
                    $listaLotes[$chave]["NOME_ITEM"] = $item['ITEM_NOME'];
                }
            }
            foreach ($listaUnidadesMedida as $unidade_medida){
                if($lote["ID_ITEM"] === $unidade_medida["ID_ITEM"]){
                    //pegamos o nome do item conforme o ID de item do lote
                    $listaLotes[$chave]["NOME_ITEM"] = $unidade_medida['unidade_nome'];
                }
            }
        }
        var_dump($listaLotes);
        require_once __DIR__ . '\..\..\src\Views\Remocao\remocao_item.php';
    }
}