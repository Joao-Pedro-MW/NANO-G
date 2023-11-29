<?php

namespace src\Repository\Itens;
use PDO;
use src\Entity\Item;
use src\Entity\Lote;

class ItensRepository
{
    public function __construct(private readonly PDO $pdo)
    {
    }

    public function TodosItens():array
    {
        $sql = "SELECT * FROM n_item";
        $listaProdutos = $this->pdo->query($sql);
        return $listaProdutos->fetchAll(PDO::FETCH_ASSOC);
    }

    public function TodosLotesNaoZero():array
    {
        $sql = "SELECT * FROM n_lote WHERE QUANTIDADE > 0";
        $listaLotes = $this->pdo->query($sql);
        return $listaLotes->fetchAll(PDO::FETCH_ASSOC);
    }
    public function TodosLotes():array
    {
        $sql = "SELECT * FROM n_lote";
        $listaLotes = $this->pdo->query($sql);
        return $listaLotes->fetchAll(PDO::FETCH_ASSOC);
    }
    public function TodasCategorias():array
    {
        $sql = "SELECT * from n_categoria";
        $listaCategorias = $this->pdo->query($sql);
        return $listaCategorias->fetchAll(PDO::FETCH_ASSOC);

    }
    public function TodosUnidadesMedidas():array
    {
        $sql = "SELECT * FROM n_unidade_medida";
        $listaUnidadesMedida = $this->pdo->query($sql);
        return $listaUnidadesMedida->fetchAll(PDO::FETCH_ASSOC);
    }

    public function RemoveItem(int $id_item):bool
    {
        try {
            $sql = 'DELETE FROM n_item WHERE id_item = :id';
            $query = $this->pdo->prepare($sql);
            $query->bindValue(':id', $id_item);
            $query->execute();
            return True;
        } catch (\PDOException $erro) {
            return False;
        }
    }

    public function RemoveLote(int $id_lote):void
    {
        $sql = "DELETE FROM N_LOTE WHERE ID_LOTE = :id_lote";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':id_lote',$id_lote);
        $query->execute();
    }
    public function CriaItem(Item $novoItem):void
    {
        $sql = "INSERT INTO n_item VALUES (s_item_id.nextval, :nomeItem,:idCategoriaItem,:idUnidadeMedidaItem,SYSDATE,1,1,SYSDATE)";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':nomeItem',$novoItem->itemNome);
        $query->bindValue(':idCategoriaItem',$novoItem->itemCategoria);
        $query->bindValue(':idUnidadeMedidaItem',$novoItem->itemUnidadeMedida);
        $query->execute();
    }

    public function RetornaItem(int $idItem):array
    {
        $sql = "SELECT * FROM n_item WHERE ID_ITEM = $idItem";
        $dadosItem = $this->pdo->query($sql);
        return $dadosItem->fetch(PDO::FETCH_ASSOC);
    }

    public function AtualizaItem(int $itemId, Item $dadositem):void
    {
        $sql = "UPDATE n_item SET item_nome = :nomeItem, id_categoria = :idCategoriaItem, LAST_UPDATED_BY = 8, LAST_UPDATE_DATE = SYSDATE, id_un_medida = :idUnidadeMedidaItem
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
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function CriaLote(Lote $lote):void
    {
        $sql = "INSERT INTO n_lote (id_lote,id_item,quantidade,data_validade, VALOR_ITEM, CREATE_DATE,CREATED_BY,LAST_UPDATED_BY,LAST_UPDATE_DATE)
        VALUES (S_LOTE_ID.nextval, :itemID, :quantidadeItem, TO_DATE(:data_validade, 'YYYY-MM-DD'),:valorItem,SYSDATE,1,1,SYSDATE)";
        $query = $this->pdo->prepare($sql);
        $query->bindValue(':itemId',$lote->itemId);
        $query->bindValue(':quantidadeItem',$lote->quantidadeItens);
        $query->bindValue(':data_validade',$lote->dataValidadeItem);
        $query->bindValue(':valorItem',$lote->valorItem);
        $query->execute();
    }
    public function ReduzQuantidadeLote(int $id_lote, int $quantidade):void
    {
        if($quantidade !== 0){
            $sql = "UPDATE N_LOTE SET QUANTIDADE = (QUANTIDADE - :quantidade) WHERE ID_LOTE = :id_lote";
            $query = $this->pdo->prepare($sql);
            $query->bindValue(':quantidade',$quantidade);
            $query->bindValue(':id_lote',$id_lote);
            $query->execute();
        }
    }
}