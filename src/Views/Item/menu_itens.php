<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu itens</title>
    <link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\menu_itens\menu_itens.css">
    <link rel="stylesheet" type="text/css" href="..\css\tabelas.css">
    <script type="text/javascript" src="..\js\menu.js"></script>
</head>
<body>
<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
<div class="base">

    <div class="head">

        <h1>Consulta de itens</h1>

        <a href="/itens/cadastro_item">
            <button type="button" class="botao">Cadastrar novo item</button>
        </a>

    </div>

    <table class="tabela_dados" id="tabela_dados">
        <tr>
            <th>Nome</th>
            <th>Categoria</th>
            <th>Un. medida</th>
            <th>Operações</th>
        </tr>

        <?php foreach ($listaItens as $item): ?>

            <tr>

                <td class="td_produto" id="nome"><?= $item["ITEM_NOME"] ?></td>
                <td class="td_un_medida" id="un_medida"v><?= $item["NOME_CATEGORIA"] ?></td>
                <td class="td_tipo" id="tipo"><?= $item["NOME_UN_MEDIDA"] ?></td>

                <td class="td_opcoes">

                    <a class="botao_editar" href="/itens/edita_item?item=<?= $item["ID_ITEM"] ?>">
                        <img src="..\imagens\imagem_lapis_edicao.svg" title="Editar item" alt="Lapis" id="icones">
                    </a>

                    <a id="lixeira" class="botao_lixeira" href="/itens/remove_item?item=<?= $item["ID_ITEM"] ?>">
                        <img src="..\imagens\imagem_lixeira.svg" title="Excluir item" alt="Lixeira" id="icones">
                    </a>

                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
</body>
</html>
