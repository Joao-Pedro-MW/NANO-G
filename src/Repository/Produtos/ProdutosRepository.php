<?php

namespace src\Repository\Produtos;
use PDO;
class ProdutosRepository
{
    public function __construct(private PDO $pdo)
    {
    }

    public function TodosProdutos():array
    {
        $sql = 'SELECT * FROM n_itens';
        $listaProdutos = $this->pdo->query($sql);
        $listaProdutos = $listaProdutos->fetchAll(PDO::FETCH_ASSOC);
        return $listaProdutos;
    }
    public function RemoveItem(int $id): void
    {
            $sql = 'DELETE FROM n_item WHERE id_item = :id';
            $query = $this->pdo->prepare($sql);
            $query->bindValue(':id',$id);
            $query->execute();
    }

}