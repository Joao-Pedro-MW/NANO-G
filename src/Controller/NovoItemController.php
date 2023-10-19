<?php

namespace src\Controller;

use src\Controller\Controller;

class NovoItemController implements Controller
{
    public function __construct()
    {
    }
    public function processaRequisicao(): void
    {
        require_once __DIR__ . '\..\..\src\Views\Item\cadastro_item.php';
    }
}