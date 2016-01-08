<?php

include_once ("../../../vendor/autoload.php");

use App\BITM\SEIP107348\Date\Birthday;
use App\BITM\SEIP107348\Utility\Utility;

$birthday = new Birthday($_POST['date']);
$birthdays = $birthday->store();

//var_dump($birthdays);

