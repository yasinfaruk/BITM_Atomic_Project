<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");


use App\BITM\SEIP107348\Checkbox\Hobby;
use App\BITM\SEIP107348\Utility\Utility;

$hobby = new Hobby();
echo $hobby -> store($_POST);
 
// var_dump($hobby);
 
 
// Utility::d($hobby);
