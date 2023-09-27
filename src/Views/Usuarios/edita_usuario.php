<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Usuário</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\editar_usuarios\editar_usuarios.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>

<body>
	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
	<h1 style="margin-left:10vw; height: 7vh;margin-right: 60vw;">Editar Usuário</h1>

	<div style="display:flex;margin-top: -10vh;">
		<img src="/imagens/imagem_usuario.svg" class="perfil">
		<div style="display:grid;" class="div_primaria">

			<div style="display:flex;" class="div_secundaria">

				<label for="nome">Nome*</label>
				<input type="text" name="nome" class="input" required>

				<label for="emai'l">Email*</label>
				<input type="email" name="email" required class="input">

			</div>

			<div style="display:flex;" class="div_secundaria">

				<label for="cpf">CPF*</label>
				<input type="number" name="cpf" required class="input">

				<label for="data_nascimento">Data de Nascimento*</label>
				<input type="date" name="data_nascimento" required class="input">

			</div>

			<div style="display:grid;">

				<p>Tipo de Permissão*</p>
				<div style="display:flex;"><input type="checkbox" name="">Administrador</div>
				<div style="display:flex;"><input type="checkbox" name="">Funcionario</div>
				
			</div>
		
		</div>

	</div>
	<button class="botao_salvar">Salvar</button>

</body>
</html>