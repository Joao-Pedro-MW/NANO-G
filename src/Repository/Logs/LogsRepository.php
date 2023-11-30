<?php

namespace src\Repository\Logs;
use PDO;

class LogsRepository{
    public function __construct(private readonly PDO $pdo)
    {
    }

    public function ListarLogs():array
        {
            $sql = "SELECT CRIADOR, 
               TO_CHAR(CREATE_DATE, 'DD/MM/YY HH24:MI:SS') AS CREATE_DATE, 
               TABELA, 
               ATUALIZADOR, 
               TO_CHAR(LAST_UPDATE_DATE, 'DD/MM/YY HH24:MI:SS') AS LAST_UPDATE_DATE
            FROM N_LOGS_V";
            $logs = $this->pdo->query($sql);
        return $logs->fetchAll(PDO::FETCH_ASSOC);
    }
}