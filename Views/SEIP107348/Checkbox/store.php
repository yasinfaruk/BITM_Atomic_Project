<?php

include_once ("../../../vendor/autoload.php");

use App\BITM\SEIP107348\Checkbox\Hobby;
use App\BITM\SEIP107348\Utility\Utility;

$hobby = new Hobby($_POST['hobby']);
echo $hobby -> index();
 
// var_dump($hobby);
 
 
// Utility::d($hobby);
