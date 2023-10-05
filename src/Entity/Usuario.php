<?php
declare(strict_types=1);
namespace src\Entity;

class Usuario
{
    public function __construct(
        public string $nome,
        public string $data_nascimento,
        public string $tipo_usuario,
        public string $user_login,
        public string $user_senha
    ){}

}