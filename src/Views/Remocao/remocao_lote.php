<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="..\imagens\favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nano-G | Remover Lote</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\remocao_lote\remocao_lote.css">
	<link rel="stylesheet" type="text/css" href="..\css\tabelas.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
    <script type="text/javascript" src="..\js\filtro lote.js"></script>
</head>
<body>
	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
    <h1>Remoção de Lotes</h1>
	<div class="base">
        <form method="post" name="form_remocao" id="form_remocao">
            <table id="tabela_dados">
                <tr class="header">
                    <th class="item">Lote
                        <select id="lote" autofocus class="combobox" onchange="filtrolote()">
                            <?php foreach ($listaLotes as $lote): ?>
                                <option class="opcao" id="pesquisa_nome_item"><?=$lote["ID_LOTE"]?></option>
                            <?php endforeach;?>
                        </select>
                    </th>
                    <th class="item">Unidade Medida
                        <select id="Un_medida" autofocus class="combobox" onchange="filtroun()">
                            <?php foreach ($listaUnidadesMedida as $unidadeMedida): ?>
                                <option class="opcao" id="pesquisa_un_medida"><?= $unidadeMedida['UNIDADE_NOME']?></option>
                            <?php endforeach;?>>
                        </select>
                    </th>
                    <th class="item">Quantidade
                        <select id="quantidade" autofocus class="combobox" onchange="filtroqtd()">
                            <?php foreach ($listaLotes as $lote): ?>
                                <option class="opcao" id="pesquisa_quantidade"><?= $lote["QUANTIDADE"]?></option>
                            <?php endforeach;?>
                        </select>
                    </th>
                    <th class="item">Valor por Item
                        <select id="valor" autofocus class="combobox" onchange="filtrovalor()">
                            <?php foreach ($listaLotes as $lote): ?>
                                <option class="opcao" id="pesquisa_valor"><?= $lote["VALOR_ITEM"]?></option>
                            <?php endforeach;?>
                        </select>
                    </th>
                    <th class="item">Categoria
                        <select id="categoria" autofocus class="combobox" onchange="filtrocat()">
                            <?php foreach ($listaCategorias as $categoria): ?>
                                <option class="opcao" id="pesquisa_valor"><?= $categoria["CATEGORIA_NOME"]?></option>
                            <?php endforeach;?>
                        </select>
                    </th>
                    <th class="item">Validade
                        <select id="validade" autofocus class="combobox" onchange="filtrovalidade()">
                            <?php foreach ($listaLotes as $lote): ?>
                                <option class="opcao" id="pesquisa_lote"><?= $lote["DATA_VALIDADE"]?></option>
                            <?php endforeach;?>
                        </select>
                    </th>
                    <th class="item">
                    </th>
                </tr>
                <?php foreach ($listaLotes as $lote): ?>
                    <tr>
                    <td class="item" id="lote_item"><?= $lote['ID_LOTE']?></td>
                    <td class="item" id="unidade_medida_item"><?= $lote['UNIDADE_MEDIDA']?></td>
                    <td class="item" id="quantidade_item"><?= $lote['QUANTIDADE']?></td>
                    <td class="item" id="valor_item"><?= $lote['VALOR_ITEM']?></td>
                    <td class="item" id="nome_item"><?= $lote['CATEGORIA']?></td>
                    <td class="item" id="validade_lote"><?= $lote['DATA_VALIDADE']?></td>
                    <td id="lixeira">
                        <a href="/itens/excluir_lote?id=<?=$lote['ID_LOTE']?>">
                        <img alt="Lixeira" title="Excluir permantentente este lote" src="..\imagens\imagem_lixeira.svg">
                        </a>
                    </td>
                </tr>
                <?php endforeach;?>
            </table>
        </form>
	</div>

</body>
</html>