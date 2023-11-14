<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Repository\Itens\ItensRepository;

class ProcessaSaidaController implements Controller
{
    public function __construct(private ItensRepository $itensRepository){}
    public function processaRequisicao(): void
    {
        $dadosLotes = $this->itensRepository->TodosLotes();
        $dadosForm = $_POST;
        var_dump($dadosForm);
        foreach ($dadosLotes as $lote) {
            if($lote{})
            //if($qtd_saida != 0 and $dadosLotes[$id])
        }
        //}
    }
}