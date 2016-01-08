<?php

include_once ("../../../vendor/autoload.php");

//include_once ($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR."BITM_Atomic_Project".DIRECTORY_SEPARATOR."vendor".DIRECTORY_SEPARATOR."autoload.php");
//echo 'hi';

use App\BITM\SEIP107348\Select\City;
use App\BITM\SEIP107348\Utility\Utility;

$city_name = new City($_POST['select']);
echo $city_name -> index();


//Utility::d($city_name);