<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
use src\Repository\Usuario\UsuarioRepository;
use src\Controller\ {
  Controller,
  NovoUsuarioController,
  EditaUsuarioController,
  RemoveUsuarioController,
  ListarUsuarioController
};



/*
if($_SERVER['REQUEST_URI']==='/'){
  require_once __DIR__ . '\..\src\views\login.php';
}
if($_SERVER['REQUEST_URI']==='/logs'){
    require_once __DIR__ . '\..\src\views\logs\logs.php';
}
// Menu usuários
if($_SERVER['REQUEST_URI']==='/usuarios'){
  require_once __DIR__ . '\..\src\views\usuarios\menu_usuario.php';
}
if($_SERVER['REQUEST_URI']==='/usuarios/edita-usuario'){
  require_once __DIR__ . '\..\src\views\usuarios\edita_usuario.php';
}
if($_SERVER['REQUEST_URI']==='/usuarios/criar-usuario'){
  require_once __DIR__ . '\..\src\views\usuarios\cria_usuario.php';
}

if($_SERVER['REQUEST_URI']==='/saida'){
  require_once __DIR__ . '\..\src\views\remocao\remocao_item.php';
}
//Menu produtos
if($_SERVER['REQUEST_URI']==='/produtos'){
  require_once __DIR__ . '\..\src\views\produtos\menu_produtos.php';
}
if($_SERVER['REQUEST_URI']==='/produtos/cadastro-lote'){
  require_once __DIR__ . '\..\src\views\produtos\cadastro_lote.php';
}
if($_SERVER['REQUEST_URI']==='/consulta_estoque'){
  require_once __DIR__ . '\..\src\estoque\consulta_estoque.php';
}
if($_SERVER['REQUEST_URI']==='/teste_banco'){
  require_once __DIR__ . '\..\src\bancodados\teste.php';
}
if($_SERVER['REQUEST_URI']==='/erro'){
  require_once __DIR__ . '\..\src\views\erro\erro.php';
}
else {
  http_response_code(404);
}
// __DIR__ . '../arquivo.php'
*/



$pdo = new PDO('oci:dbname=//localhost:1521/XEPDB1', 'system', '12345');
$rotas = require_once __DIR__ .  '\..\config\rotas.php';

$usuarioRepository = new UsuarioRepository($pdo);
$rotaSolicitada = $_SERVER['PATH_INFO'];
$meioHTTP = $_SERVER['REQUEST_METHOD'];

$chave = "$meioHTTP|$rotaSolicitada";

if(array_key_exists($chave,$rotas)) {
    $classeControlador = $rotas["$meioHTTP|$rotaSolicitada"];
    $controlador = new $classeControlador($usuarioRepository);
} else {
    $controlador = new Erro404Controlador();
}

$controlador->processaRequisicao();

//php -S 0.0.0.0:80 -t public
//todas requests vem para public
//https://cursos.alura.com.br/course/php-web-conhecendo-padrao-mvc/task/118309
//http_response_code(404);


