<?php

namespace src\Repository\Itens;
use PDO;
use src\Entity\Item;

class ItensRepository
{
    public function __construct(private PDO $pdo)
    {
    }

    public function TodosItens():array
    {
        $sql = 'SELECT * FROM n_item';
        $listaProdutos = $this->pdo->query($sql);
        $listaProdutos = $listaProdutos->fetchAll(PDO::FETCH_ASSOC);
        return $listaProdutos;
    }

    public function ListaCategorias():array
    {
        $sql = "SELECT * from n_categoria";
        $listaCategorias = $this->pdo->query($sql);
        $listaCategorias = $listaCategorias->fetchAll(PDO::FETCH_ASSOC);
        return $listaCategorias;

    }

    public function ListaUnidadesMedida():array
    {
        $sql = "SELECT * FROM n_unidade_medida";
        $listaUnidadesMedida = $this->pdo->query($sql);
        $listaUnidadesMedida = $listaUnidadesMedida->fetchAll(PDO::FETCH_ASSOC);
        return $listaUnidadesMedida;
    }
    public function RemoveItem(int $id_item): void
    {
        $sql = 'DELETE FROM n_item WHERE id_item = :id';
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id',$id_item);
        $query->execute();
    }

    public function CriaItem(Item $novoItem):void
    {
        $sql = "INSERT INTO n_item VALUES (s_item_id.nextval, :nomeItem,:idCategoriaItem,:idUnidadeMedidaItem)";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':nomeItem',$novoItem->itemNome);
        $query->bindValue(':idCategoriaItem',$novoItem->itemCategoria);
        $query->bindValue(':idUnidadeMedidaItem',$novoItem->itemUnidadeMedida);
        $resultado = $query->execute();
    }

    public function RetornaItem(int $idItem):array
    {
        $sql = "SELECT * FROM n_item WHERE ID_ITEM = $idItem";
        $dadosItem = $this->pdo->query($sql);
        $dadosItem = $dadosItem->fetch(PDO::FETCH_ASSOC);
        return $dadosItem;
    }

    public function AtualizaItem(int $itemId, Item $dadositem):void
    {
        $sql = "UPDATE n_item SET item_nome = :nomeItem, id_categoria = :idCategoriaItem, id_un_medida = :idUnidadeMedidaItem
        WHERE id_item = $itemId";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':nomeItem',$dadositem->itemNome);
        $query->bindValue(':idCategoriaItem',$dadositem->itemCategoria);
        $query->bindValue(':idUnidadeMedidaItem',$dadositem->itemUnidadeMedida);
        $query->execute();
    }

    public function GetUnidadeMedidaPorId(int $idItem):array
    {
        $sql = "SELECT unidade_nome FROM n_unidade_medida WHERE id_unidade_medida =
        (SELECT id_un_medida FROM n_item WHERE id_item = :idItem)";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':idItem', $idItem);
        $query->execute();  // Execute a consulta preparada
        $unidadeMedidaItem = $query->fetch(PDO::FETCH_ASSOC);
        return $unidadeMedidaItem;
    }
}