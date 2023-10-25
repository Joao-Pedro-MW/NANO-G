<?php $imagens_url = '..' . DIRECTORY_SEPARATOR . 'imagens' . DIRECTORY_SEPARATOR ?>

<div class="titulo_sistema">
    <div id="mySidenav" class="sidenav">
        <!-- primeiro botão para FECHAR o menu -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
          <div class="menu-botao-claro">
            <img id="botao_menu_branco" src="<?php echo $imagens_url . "botao_menu_branco.svg"?> ">
            <p>Fechar</p>
          </div>
        </a>
        
        <div class="menu_container">
            <div class="menu_classe">
                <h1 class="classe_titulo">Logs</h1>
                <a href="\logs">Consulta de Logs</a>
                
            </div>
            <div class="menu_classe">
                <h1 class="classe_titulo">Estoque</h1>
                <a href="\produtos">Menu Itens</a>
                <a href="\produtos\cadastro_item">Cadastro de itens</a>
                <a href="\produtos\cadastro_lote">Cadastro de lote</a>

            </div>
            <div class="menu_classe">
                <h1 class="classe_titulo">Saída</h1>
                <a href="\remocao">Saída de estoque</a>
            </div>
            <div class="menu_classe">
                <h1 class="classe_titulo">Usuarios</h1>
                <a href="\usuarios">Menu usuarios</a>
                <a href="\usuarios\cria_usuario">Cadastro de usuários</a>
            </div>

        </div>
        
    </div>
    <!-- primeiro botão para ABRIR o menu -->
    <span class="menu-botao-escuro" onclick="openNav()">
        <!-- <img id="botao_menu" src="<?php echo __DIR__ . 'imagens' . DIRECTORY_SEPARATOR . 'botao_menu.svg'?>" -->
        <img id="botao_menu" src="<?php echo $imagens_url . 'botao_menu.svg'?>">
    <p>Menu</p></span>
    <h2>NANO-G</h2>
        <div id="usuario" class="usuario">
            <p>Usuário</p>
            <img src="<?php echo $imagens_url . 'imagem_usuario.svg'?>" alt="imagem do usuario">
        </div>
</div>