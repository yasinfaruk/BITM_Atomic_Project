<?php

namespace App\BITM\SEIP107348\Database;

//$db_connect = new mysqli("localhost", "root", "root");
//$_SESSION[$db_connect];
//
//if (!$db_connect) {
//    echo 'wrong';
//} else {
//    echo 'connected';
//}

class Database {

    public $db_host = "localhost";
    public $db_username = "root";
    public $db_password = "root";

    public function dbConnection($host, $username, $password) {
        return;
    }

}
