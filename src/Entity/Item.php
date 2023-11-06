<?php

declare(strict_types=1);
namespace src\Entity;

class Item{
    public function __construct(
        public string $itemNome,
        public int $itemCategoria,
        public int $itemUnidadeMedida
    )
    {}
}