<?php

declare(strict_types=1);

if($_SERVER['REQUEST_URI']==='/'){
  require_once __DIR__ . '\..\src\login.php';
}
if($_SERVER['REQUEST_URI']==='/logs'){
    require_once __DIR__ . '\..\src\logs\logs.php';
}
// Menu usuários
if($_SERVER['REQUEST_URI']==='/usuarios'){
  require_once __DIR__ . '\..\src\usuarios\menu_usuario.php';
}
if($_SERVER['REQUEST_URI']==='/usuarios/edita-usuario'){
  require_once __DIR__ . '\..\src\usuarios\edita_usuario.php';
}
if($_SERVER['REQUEST_URI']==='/usuarios/criar-usuario'){
  require_once __DIR__ . '\..\src\usuarios\cria_usuario.php';
}

if($_SERVER['REQUEST_URI']==='/saida'){
  require_once __DIR__ . '\..\src\remocao\remocao_item.php';
}
//Menu produtos
if($_SERVER['REQUEST_URI']==='/produtos'){
  require_once __DIR__ . '\..\src\produtos\menu_produtos.php';
}
if($_SERVER['REQUEST_URI']==='/produtos/cadastro-lote'){
  require_once __DIR__ . '\..\src\produtos\cadastro_lote.php';
}
if($_SERVER['REQUEST_URI']==='/consulta_estoque'){
  require_once __DIR__ . '\..\src\estoque\consulta_estoque.php';
}


else {
  http_response_code(404);
}
// __DIR__ . '../arquivo.php'


//php -S 0.0.0.0:80 -t public
//todas requests vem para public
//https://cursos.alura.com.br/course/php-web-conhecendo-padrao-mvc/task/118309
//http_response_code(404);


