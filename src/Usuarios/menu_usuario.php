<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\menu_usuarios\menu_usuarios.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>

<body>
	<?php require '..\menu_lateral.php' ?>
	
	<div class="tab_usuario">
		<img src="/imagens/teste.png" alt="Foto de perfil" class="perfil" >

		<div class="nome">	
			<p>Nome: João Pedro Muller Wilges</p>
			<p>Tipo: Administrador</p>
		</div>

		<label for="switch">Ativado</label>
		<label id="switch" class="switch">
			<input type="checkbox">
			<span class="slider round"></span>
		</label>

		<button style="float:right;" class="botao_editar">Editar</button>
		<button style="float:right;" class="botao_lixeira"><img src="/imagens/imagem_lixeira.svg" width="50vw" height="50vh"></button>
	</div>
</body>
</html>