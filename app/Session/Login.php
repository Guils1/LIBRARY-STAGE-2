<?php

namespace App\Session;

class Login {

    private static function init() {
        if(session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function getUserlogado() {

        self::init();

        return self::isLogged() ? $_SESSION['usuario'] : null;
    }

    public static function login($obUsuario){
        
        self::init();


        $_SESSION['usuario'] = [
            'id' => $obUsuario->id,
            'nome' => $obUsuario->nome,
            'login' => $obUsuario->login,
        ];

        header('location: ../../index');
        exit();
    }

    public static function logout() {
        self::init();

        header('location: register');
        session_destroy();
    }

    public static function isLogged() {
        
        self::init();
        
        return isset($_SESSION['usuario']['id']);
    }

    public static function requireLogin() {
        if(!self::isLogged()) {
            header('location: layouts/controllers/register');
            exit;
        }
    }
    
    public static function requireLogout() {
        if(self::isLogged()) {
            header('location: index');
            exit();
        }
    }
    
}