<?php

namespace src\Repository\UnidadesMedida;
use PDO;
class UnidadesMedidaRepository
{
    public function __construct(private PDO $pdo)
    {
    }
    public function TodasUnidadesMedida():array
    {
        $sql = 'SELECT * FROM n_item';
        $listaUnidadesMedida = $this->pdo->query($sql);
        $listaUnidadesMedida = $listaUnidadesMedida->fetchAll(PDO::FETCH_ASSOC);
        return $listaUnidadesMedida;
    }
}