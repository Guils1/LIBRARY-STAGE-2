<?php

require_once(__DIR__.'/../../vendor/autoload.php');

define('TITLE','Editar livro');

use \App\Entity\Book;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: ../../index.php?page=books&status=error');
  exit;
}

//CONSULTA O LIVRO
$obBook = Book::getBook($_GET['id']);

//VALIDAÇÃO DO LIVRO
if(!$obBook instanceof Book){
  header('location: ../../index.php?page=books&status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['descricao'],$_POST['ativo'])){

  $obBook->nome    = $_POST['nome'];
  $obBook->descricao = $_POST['descricao'];
  $obBook->data_lancamento = $_POST['data_lancamento'];
  $obBook->ativo     = $_POST['ativo'];
  $obBook->atualizar();

  header('location: ../../index.php?page=books&status=success');
  exit;
}

include (__DIR__.'/../pages/header.php');
include (__DIR__.'/../pages/formulario.php');
include __DIR__.'/../pages/footer.php';