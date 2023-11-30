<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="..\imagens\favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nano-G | Logs</title>
    <link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
    <link rel="stylesheet" type="text/css" href="..\css\logs\logs.css">
    <link rel="stylesheet" type="text/css" href="..\css\tabelas.css">
    <script type="text/javascript" src="..\js\menu.js"></script>
</head>
<body>
<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
<div class="base">
    <h1>Registros de Entrada/Saída</h1>
    <!--
    <div class="menu_botoes">

        <label class="container">
            <input type="checkbox" id="saida" class="check">
            <span class="checkmark_saida">Saída</span>
        </label>

        <label class="container">
            <input type="checkbox" id="entrada" class="check">
            <span class="checkmark_entrada">Entrada</span>
        </label>

        <div class="datas">
            <p>De:</p>
            <input type="date" name="data_inicio" id="data_inicio" class="botao" placeholder="Data Inicial">
        </div class="datas">

        <div class="datas">
            <p>até:</p>
            <input type="date" name="data_fim" id="data_fim" class="botao" placeholder="Data Final">
        </div>

        <button type="button" class="botao" id="botao_filtro">Filtrar Dados</button>

    </div>
    -->
    <table class="tabela_dados" id="tabela_dados">
        <tr>
            <th>Criador</th>
            <th>Data/Hora criação do registro</th>
            <th>Local</th>
            <th>Usuario de edicao</th>
            <th>Ultima alteração</th>
        </tr>
        <?php foreach ($logs as $log):?>
            <tr>
                <td><?=$log['CRIADOR']?></td>
                <td><?=$log['CREATE_DATE']?></td>
                <td><?=$log['TABELA']?>s</td>
                <td><?=$log['ATUALIZADOR']?></td>
                <td><?=$log['LAST_UPDATE_DATE']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
</body>
</html>
