<?php

include_once ("../Database/db_connection.php");



if(!$db_connect){
    echo 'wrong';
}  else {
    echo 'connected';
}
