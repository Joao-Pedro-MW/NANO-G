<?php

namespace src\Controller;

class AcessaListarLogController implements Controller
{
    public function processaRequisicao():void
    {
        require_once __DIR__ . '\..\..\src\Views\Logs\logs.php';
    }
}