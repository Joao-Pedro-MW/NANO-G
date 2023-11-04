<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro lote</title>
    <link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\cadastro_lote\cadastro_lote.css">
    <script type="text/javascript" src="..\js\menu.js"></script>

</head>
<body>
<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
<script>

</script>
<div class="linha" id="main_div">
    <div id="content_div">

        <div class="coluna">
            <div>
                <label for="itens">Nome do Item</label>
                <select class="itens" name="itens" id="itens" autofocus required>
                    <option id="" class="item" name="nome_item" value=""></option>
                    <?php foreach ($listaItens as $item): ?>
                        <option
                                id="<?=$item["ID_ITEM"]?>"
                                class="item"
                                name="nome_item"
                                value="<?= $item["ITEM_NOME"] ?>"
                        >
                            <?= $item["ITEM_NOME"] ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="junto">
                <div class="div_left">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" min="1" name="quantidade" id="quantidade" placeholder="quantidade">
                </div>
                <div class="div_left">
                    <label for="un_medida">Unidade de Medida</label>
                    <!-- Este campo é alterado conforme a option selecionada do item-->
                    <input type="text" name="un_medida" id="un_medida" value="xl" readonly disabled><br>
                </div>
            </div>
            <div>
                <label for="valor">Valor</label>
                <input type="number" min="0" name="valor" id="valor" placeholder="R$ Reais">
            </div>
        </div>
        <div class="coluna">
            <div>
                <label for="validade">Validade do Produto</label>
                <input type="date" name="validade" id="validade" placeholder="Data de Validade"><br>
            </div>
            <div>
                <label for="lote" id="label">Lote (Automático)</label>
                <!--Necessario ser validado pela Alynne-->
                <input type="text" name="lote" id="lote" placeholder="XXXXXX" readonly><br>
            </div>
            <div>
                <label for="botao" id="label_inv">.</label>
                <button id="botao">Cadastrar Lote</button>
            </div>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="..\js\novo_lote.js"></script>
</html>