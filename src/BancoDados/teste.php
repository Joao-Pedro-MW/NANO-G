<?php
// Connects to the XE service (i.e. database) on the "localhost" machine
$conn = oci_connect('SYSTEM', '12345', 'localhost/XEPDB1');  
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

?>

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

   	<div class="base"></div>

    <label for="nome">Nome completo</label>
    <input type="text" name="nome" id="nome">

    <label for="dt_nasc">Data nascimento</label>
    <input type="date" name="dt_nasc" id="dt_nasc">

    <div>
        <input type="checkbox" id="user_adm">
        <label for="user_adm">Adminsitrador</label>
        <input type="checkbox" id="user_cm">
        <label for="user_cm">Funcionário</label>
    </div>


    <label for="email">E-mail</label>
    <input type="text" name="email" id="email">


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