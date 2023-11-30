<?php

namespace src\Repository\Logs;
use PDO;

class LogsRepository{
    public function __construct(private readonly PDO $pdo)
    {
    }

    public function ListarLogs():array
        {
        $sql = "SELECT * FROM N_LOGS_V";
        $logs = $this->pdo->query($sql);
        return $logs->fetchAll(PDO::FETCH_ASSOC);
    }
}