<?php

namespace src\Controller;

use src\Controller\Controller;
use src\Repository\Itens\ItensRepository;

class ProcessaSaidaController implements Controller
{
    public function __construct(private ItensRepository $itensRepository){}
    public function processaRequisicao(): void
    {
        var_dump($_POST);
    }
}