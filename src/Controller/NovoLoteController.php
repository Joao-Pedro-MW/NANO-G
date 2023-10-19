<?php

namespace src\Controller;

use src\Controller\Controller;

class NovoLoteController implements Controller
{
    public function __construct()
    {
    }
    public function processaRequisicao(): void
    {
        require_once __DIR__ . '\..\..\src\Views\Item\cadastro_lote.php';
    }
}