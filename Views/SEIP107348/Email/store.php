<?php

include_once $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'BITM_Atomic_Project'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';

use App\BITM\SEIP107348\Email\Subscription;

$email = new Subscription($_POST['email']);
echo $email ->store();