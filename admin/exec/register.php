<?php

namespace App\Session;

require (__DIR__.'/../../vendor/autoload.php');

use \App\Entity\Usuario;                                                  
use \App\Session\Login;
Login::requireLogout();

$alertaLogin = '';
$alertaCadastro = '';

if(isset($_POST['acao'])) {
    switch($_POST['acao']){
        case 'Enviar':
            $obUsuario = Usuario::getUser($_POST['login']);
            if(!$obUsuario instanceof Usuario || !password_verify($_POST['password'],$obUsuario->password)) {
                $alertaLogin = 'Usuário ou senha inválida';
                break;
            }

            Login::login($obUsuario);
        break;

        case 'Cadastra-se':
            if(isset($_POST['nome'],$_POST['sobrenome'],$_POST['login'],$_POST['password'],$_POST['data_nascimento'])) {
                
                $obUsuario = Usuario::getUser($_POST['login']);

                if($obUsuario instanceof Usuario) {
                    $alertaCadastro = "Celular, email ou nome do usuário já está em uso.";
                    break;
                }

                $obUsuario = new Usuario;
                $obUsuario->nome = $_POST['nome'];
                $obUsuario->sobrenome = $_POST['sobrenome'];
                $obUsuario->login = $_POST['login'];
                $obUsuario->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $obUsuario->data_nascimento = $_POST['data_nascimento'];
                $obUsuario->cadastrar();

                Login::login($obUsuario);

            }
            break;
    }
}

include (__DIR__.'/../pages/header.php');
include (__DIR__.'/../pages/log/main.php');
include __DIR__.'/../pages/log/footer.php';

?>