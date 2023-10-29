<?php

namespace src\Repository\Itens;
use PDO;
class ItensRepository
{
    public function __construct(private PDO $pdo)
    {
    }

    public function TodosProdutos():array
    {
        $sql = 'SELECT * FROM n_item';
        $listaProdutos = $this->pdo->query($sql);
        $listaProdutos = $listaProdutos->fetchAll(PDO::FETCH_ASSOC);
        return $listaProdutos;
    }
    public function RemoveItem(int $id_item): void
    {
        $sql = 'DELETE FROM n_item WHERE id_item = :id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id',$id_item);
        $query->execute();
        header("Location: /itens");
    }

}