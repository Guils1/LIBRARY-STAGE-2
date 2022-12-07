<?php

require_once(__DIR__.'/../../vendor/autoload.php');

define('TITLE','Cadastrar livro');

use \App\Models\Book;
$obBook = new Book;

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['descricao'],$_POST['data_lancamento'],$_POST['ativo'],$_POST['img'],$_POST['genres'])){

  $obBook->nome             = $_POST['nome'];
  $obBook->descricao        = $_POST['descricao'];
  $obBook->data_lancamento  = $_POST['data_lancamento'];
  $obBook->ativo            = $_POST['ativo'];
  $obBook->img            = $_POST['img'];
  $obBook->genres            = $_POST['genres'];
  $obBook->cadastrar();

  header('location: ../../index?page=books&status=success');
  exit();
} else {
  header('location: ../layouts/controllers/error' );
}

include (__DIR__.'/../index/templates/head.php');
include (__DIR__.'/../index/templates/header.php');
include (__DIR__.'/../index/components/formulario.php');
include (__DIR__.'/../index/templates/footer.php');
