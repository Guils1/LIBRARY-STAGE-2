<?php

require_once(__DIR__.'/../../vendor/autoload.php');

use \App\Models\Book;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: ../../index?status=error');
  exit;
}

//CONSULTA O LIVRO
$obBook = Book::getBook($_GET['id']);

//VALIDAÇÃO Do LIVRO
if(!$obBook instanceof Book){
  header('location: ../../index?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $obBook->excluir();

  header('location: ../../index?page=books&status=success');
  exit;
}

include (__DIR__.'/../index/templates/head.php');
include (__DIR__.'/../index/templates/header.php');
include (__DIR__.'/../index/components/confirmar-exclusao.php');
include __DIR__.'/../index/templates/footer.php';