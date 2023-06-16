<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Usuário</title>
	<link rel="stylesheet" type="text/css" href="css\menu\header.css">
	<script type="text/javascript" src="js\menu.js"></script>
</head>
<body>
	<?php require 'menu_lateral.html' ?>
   	<div class="base"></div>

    <label for="nome">Nome completo</label>
    <input type="text" name="nome" id="nome">

    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf">

    <label for="email">E-mail</label>
    <input type="text" name="email" id="email">

    <label for="dt_nasc">Data nascimento</label>
    <input type="date" name="dt_nasc" id="dt_nasc">

    <label for="tipo_user">Tipo de usuário</label>
    <input type="text" name="tipo_user" id="tipo_user">

    <!--
        Campo para foto do usuário
        Nome
        CPF
        E-mail
        Data Nascimento
        Tipo Usuário

        Botão
    --> 
    
</body>
</html>