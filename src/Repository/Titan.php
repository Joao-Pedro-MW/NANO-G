<?php

namespace src\Repository;

use src\Repository\Lote\LoteRepository;
use src\Repository\UnidadesMedida\UnidadesMedidaRepository;

class Titan
{
    private $loteRepository;
    public function __contruct(LoteRepository $loteRepository, UnidadesMedidaRepository $unidadesMedidaRepository)
    {
    }
    public function RetornaLoteRepository()
    {
        return $this->loteRepository;
    }

    public function UnidadesMedidaRepository()
    {
        var_dump(get_class_methods($this));

    }



}