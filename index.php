<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Book;
use \App\Session\Login;
Login::requireLogin();

$books = Book::getBooks();

include __DIR__.'/admin/pages/header.php';
if (isset($_GET['exec'])) {
    include_once ('admin/exec/' . $_GET['exec'] . '.php');
} elseif (isset($_GET['page'])) {
    include_once ('admin/pages/' . $_GET['page'] . '.php');
} elseif (isset($_GET['genre'])) {
    include_once ('admin/pages/genres/' . $_GET['genre'] . '.php');
} else {
    include_once('admin/pages/main.php');
}

include __DIR__.'/admin/pages/footer.php';