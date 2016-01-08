<?php

//include_once ("../../../vendor/autoload.php");
//include_once ($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."BITM_Atomic_Project".DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php");

include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");


use App\BITM\SEIP107348\Book\Book;
use App\BITM\SEIP107348\Utility\Utility;
use App\BITM\SEIP107348\Database\Database;

$book = new Book($_POST['title']);
echo $book -> store();
 
//$book->title;
////$book->store();
//
//echo '<pre>';
// var_dump($book);
// 
// 
// Utility::dd($book);
//// $utility ->Utility();

//$connection = new Database();
//$connection->dbConnection();

