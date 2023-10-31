<?php

namespace src\Controller;
use src\Repository\Itens\ItensRepository;
use src\Repository\Titan;
use src\Repository\UnidadesMedida\UnidadesMedidaRepository;
use src\Controller\Controller;

class NovoLoteController implements Controller
{
    public function __construct(private Titan $Titan)
    {
        $this->Titan = $Titan;
    }
    public function processaRequisicao(): void
    {
        $listaUnidadesMedida = $this->Titan->RetornaLoteRepository();
        var_dump($listaUnidadesMedida);
        //Pegamos os produtos necessários
        //$listaProdutos = $this->itensRepository->TodosProdutos();

        //Pegamos as unidades de medida que vamos usar
        //$listaUnidadesMedida =
        //require_once __DIR__ . '\..\..\src\Views\Item\cadastro_lote.php';
    }
}