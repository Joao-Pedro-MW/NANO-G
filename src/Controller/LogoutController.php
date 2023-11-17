<?php

namespace src\Controller;

use src\Controller\Controller;

class LogoutController implements Controller
{

    public function processaRequisicao(): void
    {
        $_SESSION = array();
        header('Location: /');
    }
}