<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu itens</title>
    <link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\menu_itens\menu_itens.css">
    <script type="text/javascript" src="..\js\menu.js"></script>
</head>
<body>
<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
<div class="base">
    <h1>Consulta de itens</h1>
    <button type="button" class="botao"><a href="/itens/cadastro_item"> Cadastrar novo item</a>
    </button>
    <table class="tabela_dados" id="tabela_dados">
        <tr>
            <th>Nome</th>
            <th>Unidade de Medida</th>
            <th>Tipo</th>
            <th>Operações</th>
        </tr>
        <?php foreach ($listaItens as $item): ?>
            <tr>

                <td class="td_produto"><?= $item["ITEM_NOME"] ?></td>
                <td class="td_un_medida"><?= $item["ID_CATEGORIA"] ?></td>
                <td class="td_tipo"><?= $item["ID_UN_MEDIDA"] ?></td>
                <td class="td_opcoes">
                    <a style="float:right;" class="botao_editar"
                       href="/itens/edita_item?item=<?= $item["ID_ITEM"] ?>"><img
                                src="..\imagens\imagem_lapis_edicao.svg" title="Editar item" alt="Lapis" id="icones">
                        <a style="float:right;" class="botao_lixeira"
                           href="/itens/remove_item?item=<?= $item["ID_ITEM"] ?>"> <img
                                    src="..\imagens\imagem_lixeira.svg" title="Excluir item" alt="Lixeira" id="icones">
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
</body>
</html>
