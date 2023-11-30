<?php

namespace src\Controller;

use src\Repository\Logs\LogsRepository;

class AcessaListarLogController implements Controller
{
    public function __construct(private readonly LogsRepository $logsRepository)
    {

    }
    public function processaRequisicao():void
    {
        $logs = $this->logsRepository->ListarLogs();
        require_once __DIR__ . '\..\..\src\Views\Logs\logs.php';
    }
}