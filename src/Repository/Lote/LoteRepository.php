<?php

namespace src\Repository\Lote;
use PDO;
class LoteRepository
{
    public function __construct(private PDO $pdo)
    {
    }

    /*public function CriaLote()
    {
        $sql = "";
        $query = $this->pdo->prepare($sql);
        $query->bindParam();
        $query->execute();
    }*/
    public function RetornaLotes():array
    {
        $sql = "SELECT * FROM n_item";
        $listaLotes = $this->pdo->query($sql);
        $listaLotes = $listaLotes->fetchAll(PDO::FETCH_ASSOC);
        return $listaLotes;
    }



}