<?php

namespace App\Models;

use \App\Db\Database;
use \PDO;

class Usuario {
    
    public $id;

    public $nome;

    public $sobrenome;

    public $login;

    public $password;

    public $data_nascimento;

    public function cadastrar() {
        $obDatabase = new Database('users');

        $this->id = $obDatabase->insert([
            'nome'              => $this->nome,
            'sobrenome'         => $this->sobrenome,
            'login'             => $this->login,
            'password'          => $this->password,
            'data_nascimento'   => $this->data_nascimento
        ]);

        return true;
    }

    public static function getUser($login) {
        return (new Database('users'))->select('login = "'.$login.'"')->fetchObject(self::class);
    }


}