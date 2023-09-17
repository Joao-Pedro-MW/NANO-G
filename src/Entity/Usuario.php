<?php /** @noinspection PhpLanguageLevelInspection */

namespace src\Entity;

class Usuario
{
    public readonly string $nome;
    public readonly $data_nascimento;
    public readonly $tipo_usuario;
    public readonly $user_login;
    public readonly $user_senha;
    public function __construct(
         string $nome,
         string $data_nascimento,
         string $tipo_usuario,
         string $user_login,
         string $user_senha)
    {


    }
    /*Aqui podemos criar funções de validação de dados*/

}