<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\Book\Book;
use App\BITM\SEIP107348\Utility\Utility;

//Utility::dd($_GET);

$book = new Book();
echo $book ->delete($_POST['id']);