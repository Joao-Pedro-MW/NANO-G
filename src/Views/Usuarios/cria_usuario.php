<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Criar Usuário</title>
	<link rel="stylesheet" type="text/css" href="..\css\menu\header.css">
	<link rel="stylesheet" type="text/css" href="..\css\cria_usuario\cria_usuario.css">
	<script type="text/javascript" src="..\js\menu.js"></script>
</head>

<body>
	<?php require __DIR__ . '..\..\..\menu_lateral.php' ?>
	<h1 style="margin-left:10vw; height: 7vh;margin-right: 60vw;">Criar Usuário</h1>

	<div class="div_horizontal" id="main_div">
		<img src="../imagens/imagem_usuario.svg" class="perfil">

		<div class="div_vertical" id="div_dados">
			<div class="div_horizontal">
				<div class="div_vertical">

					<label for="nome">Nome</label>
					<input type="text" id="nome">

					<label for="cpf">CPF</label>
					<input type="number" id="cpf">

				</div>
				<div class="div_vertical">

					<label for="email" id="label_direita">Email</label>
					<input type="email" id="email">

					<label for="data_nascimento" id="label_direita">Data de Nascimento</label>
					<input type="date" id="data_nascimento">

				</div>
			</div>
			<div class="div_horizontal" id="low_div">
				<div id="lower_div">
					
					<p id="p">Tipo de Permissão</p>
					<div>
						<label for="admin" style="margin-left: 0.5vw">Administrador</label>
						<input type="radio" name="permissao" id="admin">
					</div>
					
					<div>
						<label for="user" style="margin-left: 0.5vw">Usuário</label>
						<input type="radio" name="permissao" id="user">	
					</div>
					
				</div>
				<button class="botao_salvar" >Salvar</button>
			</div>
			
		</div>
	</div>

</body>
</html>