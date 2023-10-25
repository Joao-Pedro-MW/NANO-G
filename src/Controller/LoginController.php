<?php

namespace src\Controller;

use src\Controller\Controller;

class LoginController implements Controller
{

    public function processaRequisicao(): void
    {
        require_once __DIR__ . '\..\..\src\login.php';
    }
}