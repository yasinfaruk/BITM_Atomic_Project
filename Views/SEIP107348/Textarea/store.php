<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");


use App\BITM\SEIP107348\Textarea\Summary;
use App\BITM\SEIP107348\Utility\Utility;

$text = new Summary($_POST['text']);
echo $text ->create();

//Utility::d($text);
