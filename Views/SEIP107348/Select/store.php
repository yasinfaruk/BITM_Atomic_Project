<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");


use App\BITM\SEIP107348\Select\City;
use App\BITM\SEIP107348\Utility\Utility;

$city_name = new City($_POST['select']);
echo $city_name -> create();


//Utility::d($city_name);