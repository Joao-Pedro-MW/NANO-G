<?php

namespace src\Controller;
use src\Repository\Itens\ItensRepository;

class ProcessaSaidaController implements Controller
{
    public function __construct(private ItensRepository $itensRepository){}
    public function processaRequisicao(): void
    {
        $idUsuario = $_SESSION['ID_USUARIO'];
        //$dadosLotes = $this->itensRepository->TodosLotesNaoZero();
        $dadosForm = $_POST;
        foreach ($dadosForm as $id_lote => $quantidade) {
            $quantidade = filter_var($quantidade,FILTER_VALIDATE_INT);
            $id_lote = filter_var($id_lote,FILTER_VALIDATE_INT);
            $this->itensRepository->ReduzQuantidadeLote($id_lote,$quantidade,$idUsuario);
            header('Location: /itens/remocao');
        }
        //}
    }
}