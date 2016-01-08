<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . "BITM_Atomic_Project" . DIRECTORY_SEPARATOR . "Views" . DIRECTORY_SEPARATOR . "startup.php");

use App\BITM\SEIP107348\File\Picture;
use App\BITM\SEIP107348\Utility\Utility;

$image = new Picture();
$image -> delete($_GET['id']);
