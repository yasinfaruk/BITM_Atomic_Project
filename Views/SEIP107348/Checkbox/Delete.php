<?php

function __autoload($className){
    $file =  "../../../" . str_replace("\\", "/", $className) . ".php";
    include_once ($file);
}

use src\BITM\SEIP107348\Checkbox\Hobby;

$delete = new Hobby();
echo $delete -> delete();