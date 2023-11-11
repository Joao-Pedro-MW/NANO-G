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
            foreach ($listaItens as $item){
                if($lote["ID_ITEM"] === $item["ID_ITEM"]) {
                    $itemNome = $item['ITEM_NOME'];
                }
                foreach ($listaUnidadesMedida as $unidade_medida){

                        $unidade_medidaLote = $item["ID_UN_MEDIDA"] === $unidade_medida["ID_UNIDADE_MEDIDA"] ? "" : $unidade_medida["UNIDADE_NOME"];
                        //if($item["ID_UN_MEDIDA"] === $unidade_medida["ID_UNIDADE_MEDIDA"]){echo "Igual Item e UnMedida  <br>";}
                        //echo $unidade_medidaLote . '<br>';
                        $lote["UNIDADE_MEDIDA"] = $unidade_medidaLote;
                        //echo "valor definido no lote -> " . var_dump($lote[$chave]);
                        //echo 'Unidade Medida do Item do Lote: ' . $unidade_medidaLote . PHP_EOL;
                    //echo 'Id do Item ' . $item["ID_UN_MEDIDA"] . " e id da chave un_medida  " . $unidade_medida['ID_UNIDADE_MEDIDA']. "    ||||||    ";


                    }
                    break;
                }
            //var_dump($listaLotes[$chave]);
            $listaLotes[$index][$lote]["laksd"] = 1641;
            echo $index;
        }
        var_dump();
        require_once __DIR__ . '\..\..\src\Views\Remocao\remocao_item.php';
    }
}