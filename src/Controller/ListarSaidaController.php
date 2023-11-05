<?php

namespace src\Controller;

class ListarSaidaController implements Controller
{

    public function processaRequisicao(): void
    {
        require_once __DIR__ . '\..\..\src\Views\Remocao\remocao_item.php';
    }
}