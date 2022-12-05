<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Book;
use \App\Session\Login;
Login::requireLogin();

$books = Book::getBooks();

include __DIR__.'/layouts/index/templates/header.php';  
if (isset($_GET['exec'])) {
    include_once ('layouts/index/components/' . $_GET['exec'] . '.php');
} elseif (isset($_GET['page'])) {
    include_once ('layouts/index/components/' . $_GET['page'] . '.php');
} elseif (isset($_GET['genre'])) {
    include_once ('layouts/pages/genres/' . $_GET['genre'] . '.php');
} else {
    include_once('layouts/index/components/main.php');
}

include __DIR__.'/layouts/index/templates/footer.php';