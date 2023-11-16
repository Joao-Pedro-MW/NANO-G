<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Repository\Itens\ItensRepository;

class ProcessaRemoverLoteController implements Controller
{
    public function __construct(private ItensRepository $itensRepository)
    {

    }
    public function processaRequisicao(): void
    {
        $id_lote = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
        if($id_lote){
            $this->itensRepository->RemoveLote($id_lote);
        }
        header('Location: /itens/exclusao_lote');
        //$id_lote = filter_input(INPUT_POST,)
    }
}