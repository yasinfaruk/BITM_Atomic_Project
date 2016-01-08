<?php

include_once( $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."BITM_Atomic_Project".DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php");
//include_once ("../../../vendor/autoload.php");


use App\BITM\SEIP107348\Textarea\Summary;
use App\BITM\SEIP107348\Utility\Utility;

$text = new Summary($_POST['text']);
echo $text ->index();

//Utility::d($text);
