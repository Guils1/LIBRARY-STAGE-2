<?php

require_once(__DIR__.'/../../vendor/autoload.php');

define('TITLE','Cadastrar livro');

use \App\Entity\Book;
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

  header('location: ../../index.php?page=books&status=success');
}

include (__DIR__.'/../pages/header.php');
include (__DIR__.'/../pages/formulario.php');
include (__DIR__.'/../pages/footer.php');
