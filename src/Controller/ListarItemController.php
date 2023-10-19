<?php

namespace src\Controller;

class ListarItemController implements Controller
{
    public function __construct()
    {
    }

    public function processaRequisicao():void
    {
        //produtosLista = $this->produtosRepository->TodosUsuarios();
        require_once __DIR__ . '\..\..\src\Views\Item\menu_itens.php';
    }
}