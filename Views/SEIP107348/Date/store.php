<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\Date\Birthday;
use App\BITM\SEIP107348\Utility\Utility;

$birthday = new Birthday($_POST['date']);
$birthdays = $birthday->store();

//var_dump($birthdays);

