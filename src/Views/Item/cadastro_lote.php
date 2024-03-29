<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="..\imagens\favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nano-G | Cadastro lote</title>
    <link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\cadastro_lote\cadastro_lote.css">
    <script type="text/javascript" src="..\js\menu.js"></script>
</head>
<body>
    <?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
    <h1>Cadastar Lote</h1>
    <form class="linha" id="main_div" method="POST">
        <div id="content_div">
            <div class="coluna">
                <div>
                    <label for="item">Nome do Item</label>
                    <select class="item" name="item" id="item" autofocus required>
                        <option id="" class="item" name="nome_item" value=""></option>
                        <?php foreach ($listaItens as $item): ?>
                            <option
                                    id="<?=$item["ID_ITEM"]?>"
                                    class="item"
                                    name="nome_item"
                                    value="<?=$item["ID_ITEM"]?>"
                            >
                                <?= $item["ITEM_NOME"] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="junto">
                    <div class="div_left">
                        <label for="quantidade">Quantidade</label>
                        <input type="number" min="0" name="quantidade" id="quantidade" placeholder="quantidade" required>
                    </div>
                    <div class="div_left">
                        <label for="un_medida">Un. Medida</label>
                        <!-- Este campo é alterado conforme a option selecionada do item-->
                        <input type="text" name="un_medida" id="un_medida" value="" disabled>
                    </div>
                </div>
                <div>
                    <label for="valor">Valor por item</label>
                    <input type="number" step="0.01" min="0" name="valor" id="valor" placeholder="R$ Reais" required>
                </div>
            </div>
            <div class="coluna" style="margin-left:5%;">
                <div>
                    <label for="validade">Validade</label>
                    <input type="date" name="data_validade" id="data_validade" min="<?=date('Y-m-d');?>" placeholder="Data de Validade" required><br>
                </div>
                <div>
                    <label for="botao" id="label_inv">.</label>
                    <button id="botao" form="main_div">Cadastrar Lote</button>
                </div>
                <div style="visibility: hidden;">
                    <label for="lote" id="label">Lote (Automático)</label>
                    <!--Necessario ser validado pela Alynne-->
                    <input type="text" name="lote" id="lote" placeholder="XXXXXX" readonly><br>
                </div>
            </div>
        </div>
    </form>
</body>
<script type="text/javascript" src="\..\js\jquery.js"></script>
<script type="text/javascript" src="\..\js\novo_lote.js"></script>
</html>