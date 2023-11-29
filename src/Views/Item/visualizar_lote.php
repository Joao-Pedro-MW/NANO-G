<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="..\imagens\favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nano-G | Todos os Lotes</title>
    <link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\remocao_itens\remocao_itens.css">
    <link rel="stylesheet" type="text/css" href="..\css\tabelas.css">
    <script type="text/javascript" src="..\js\menu.js"></script>
    <script type="text/javascript" src="..\js\filtro.js"></script>
</head>
<body>
<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>

<h1>Visualizar lotes</h1>

<div class="base">

    <form method="post" name="form_remocao" id="form_remocao">
        <table id="tabela_dados">
            <tr>
                <th class="item" name="Item">Item
                    <select id="item" autofocus class="combobox" onchange="filtroitem()">
                        <?php foreach ($listaLotes as $lote): ?>
                            <option class="opcao" id="pesquisa_nome_item"><?=$lote["NOME_ITEM"]?></option>
                        <?php endforeach;?>
                    </select>
                </th>
                <th class="item" name="Un_medida">Unidade Medida
                    <select id="Un_medida" autofocus class="combobox" onchange="filtroun()">
                        <?php foreach ($listaLotes as $lote): ?>
                            <option class="opcao" id="pesquisa_un_medida"><?= $lote["UNIDADE_MEDIDA"]?></option>
                        <?php endforeach;?>>
                    </select>
                </th>
                <th class="item" name="Quantidade">Quantidade
                    <select id="quantidade" autofocus class="combobox" onchange="filtroqtd()">
                        <?php foreach ($listaLotes as $lote): ?>
                            <option class="opcao" id="pesquisa_quantidade"><?= $lote["QUANTIDADE"]?></option>
                        <?php endforeach;?>
                    </select>
                </th>
                <th class="item" name="Valor_item">Valor por Item
                    <select id="valor" autofocus class="combobox" onchange="filtrovalor()">
                        <?php foreach ($listaLotes as $lote): ?>
                            <option class="opcao" id="pesquisa_valor"><?= $lote["VALOR_ITEM"]?></option>
                        <?php endforeach;?>
                    </select>
                </th>
                <th class="item" name="Categoria">Categoria
                    <select id="categoria" autofocus class="combobox" onchange="filtrocat()">
                        <?php foreach ($listaLotes as $lote): ?>
                            <option class="opcao" id="pesquisa_valor"><?= $lote["CATEGORIA"]?></option>
                        <?php endforeach;?>
                    </select>
                </th>
                <th class="item" name="N_lote">Número do lote
                    <select id="lote" autofocus class="combobox" onchange="filtrolote()">
                        <?php foreach ($listaLotes as $lote): ?>
                            <option class="opcao" id="pesquisa_lote"><?= $lote["ID_LOTE"]?></option>
                        <?php endforeach;?>
                    </select>
                </th>
                <th class="item" name="Validade">Validade
                    <select id="validade" autofocus class="combobox" onchange="filtrovalidade()">
                        <?php foreach ($listaLotes as $lote): ?>
                            <option class="opcao" id="pesquisa_data_validade"><?= $lote['DATA_VALIDADE']?></option>
                        <?php endforeach;?>
                    </select>
                </th>
            </tr>
            <?php foreach ($listaLotes as $lote): ?>
                <tr>
                    <td class="item" id="nome_item"><?=$lote["NOME_ITEM"]?></td>
                    <td class="item" id="unidade_medida_item"><?= $lote["UNIDADE_MEDIDA"]?></td>
                    <td class="item" id="quantidade_item"><?= $lote["QUANTIDADE"]?></td>
                    <td class="item" id="valor_item"><?= $lote["VALOR_ITEM"]?></td>
                    <td class="item" id="categoria_item"><?= $lote['CATEGORIA']?></td>
                    <td class="item" id="lote_item"><?= $lote['ID_LOTE']?></td>
                    <td class="item" id="validade_lote"><?= $lote['DATA_VALIDADE']?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </form>
</div>

</body>
</html>