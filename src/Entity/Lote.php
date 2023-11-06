<?php

namespace src\Entity;

class Lote
{
    public function __construct(
        public int $itemId,
        public int $quantidadeItens,
        public int $valorItem,
        public string $dataValidadeItem,
        public int $loteItem
    )
    {}
}