<?php

declare(strict_types=1);


if($_SERVER['REQUEST_URI']==='/'){
  require_once __DIR__ . '\..\src\login.php';
} else {
  http_response_code(404);
}
// __DIR__ . '../arquivo.php'


//php -S 0.0.0.0:80 -t public
//todas requests vem para public
//https://cursos.alura.com.br/course/php-web-conhecendo-padrao-mvc/task/118309
//http_response_code(404);


