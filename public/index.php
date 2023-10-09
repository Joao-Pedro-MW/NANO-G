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

$pdo = new PDO('oci:dbname=//localhost:1521/XEPDB1', 'system', '12345');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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


