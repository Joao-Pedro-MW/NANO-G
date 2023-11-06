<?php

namespace src\Controller;

class Erro404Controller implements Controller
{

    public function processaRequisicao(): void
    {
        require_once __DIR__ . '\..\..\src\Views\404\404.php';
    }
}