<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menu usuários</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\menu_usuarios\menu_usuarios.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>

<body>
	<?php require __DIR__ . '..\..\menu_lateral.php' ?>
	<div style="display:flex; padding: 0px;height: 7vh;">
		<h1 style="margin-left:10vw; height: 7vh;margin-right: 60vw;">Usuários</h1>
		<button class="novo_usuario">Novo Usuário</button>
	</div>
	<div class="tab_usuario">
		<img src="/imagens/imagem_usuario.svg" alt="Foto de perfil" class="perfil" >

		<div class="nome">	
			<p class="nome">Nome: João Pedro Muller Wilges</p>
			<p class="nome">Tipo: Administrador</p>
		</div>

		<label for="switch">Ativado</label>
		<label id="switch" class="switch">
			<input type="checkbox">
			<span class="slider round"></span>
		</label>

		<button style="float:right;" class="botao_editar">Editar</button>
		<button style="float:right;" class="botao_lixeira"><img src="/imagens/imagem_lixeira.svg" width="50vw" height="50vh" style="transform: scale(0.7)"></button>
	</div>
	<!-- -->
</body>
</html>