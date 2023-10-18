<?php

namespace src\Repository\Produtos;

class ProdutosRepository
{
    public function __construct(private PDO $pdo)
    {
    }
}