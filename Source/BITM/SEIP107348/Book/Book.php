<?php

namespace App\BITM\SEIP107348\Book;

use App\BITM\SEIP107348\Utility\Utility;

class Book {

    public $title = "";

//    public $created = "";
//    public $created_by = "";
//    public $modified = "";
//    public $modified_by = "";
//    public $deleted_at = "";

    public function __construct($goru = false) {
        $this->title = $goru;
    }

    public function store() {
        $conn = mysql_connect("localhost", "root", "root") or die("not connected");
        $lnk = mysql_select_db("BITM") or die("cannot select db table");

        $query = "INSERT INTO `BITM`.`atomicProject` (`title`) VALUES ('" . $this->title . "')";
        $result = mysql_query($query);
        if ($result) {
            Utility::message("Insert is successful");
        } else {
            Utility::message("Insert is failed.");
        }

        Utility::redirect('index.php');
    }

    public function index() {
        $conn = mysql_connect("localhost", "root", "root") or die("Not connected");
        $link = mysql_select_db("BITM") or die("Not connected table");

        $query = "SELECT * FROM `atomicProject`";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $books[] = $row;
        }

        return $books;
    }
    
     public function view($id = null) {
        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $conn = mysql_connect("localhost", "root", "root") or die("Not connected");
        $link = mysql_select_db("BITM") or die("Not connected table");

        $query = "SELECT * FROM `BITM`.`atomicProject` WHERE `atomicProject`.`id` = " . $id;

        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row;
    }
    
     public function update($id = null) {
        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $conn = mysql_connect("localhost", "root", "root") or die("Not connected");
        $link = mysql_select_db("BITM") or die("Not connected table");

        $query = "SELECT * FROM `BITM`.`atomicProject` WHERE `atomicProject`.`id` = " . $id;

        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    public function delete($id = null) {

        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $conn = mysql_connect("localhost", "root", "root") or die("Not connected");
        $link = mysql_select_db("BITM") or die("Not connected table");

        $query = "DELETE FROM `BITM`.`atomicProject` WHERE `atomicProject`.`id` = " . $id;

        $result = mysql_query($query);
        if ($result) {
            Utility::message("Delete is successful");
        } else {
            Utility::message("Delete is failed.");
        }

        Utility::redirect('index.php');
    }

   

}
