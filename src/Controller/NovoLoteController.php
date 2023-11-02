<?php

namespace src\Controller;
use src\Repository\Itens\ItensRepository;
use src\Repository\UnidadesMedida\UnidadesMedidaRepository;
use src\Controller\Controller;

class NovoLoteController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {
    }
    public function processaRequisicao(): void
    {
        //Pegamos os produtos necessários//
        //var_dump($listaProdutos);
        //Pegamos as unidades de medida que vamos usar
        $listaUnidadesMedida =
        require_once __DIR__ . '\..\..\src\Views\Item\cadastro_lote.php';
    }
}