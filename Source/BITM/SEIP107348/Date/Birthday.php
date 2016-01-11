<?php

namespace App\BITM\SEIP107348\Date;
use App\BITM\SEIP107348\Utility\Utility;

class Birthday {

//    public $id = " ";
    public $date = " ";
//    public $created = " ";
//    public $modified = " ";
//    public $created_by = " ";
//    public $modified_by = " ";
//    public $deleted_at = " ";

    public function __construct($model = false) {
        $this->date = $model;
    }

    public function store() {
        $connect = mysql_connect("localhost", "root", "root") or die("cannot connect");
        $link = mysql_select_db("BITM") or die("didnt select db");
        
        $query = "INSERT INTO `Date`(`birthday`) VALUES ('".$this->date."')";
        $result = mysql_query($query);
        
        if ($result) {
            Utility::message("Insert is successful");
        } else {
            Utility::message("Insert is failed.");
        }

        Utility::redirect('index.php');
    }

    
    public function index() {
        $connect = mysql_connect("localhost", "root", "root") or die("cannot connect");
        $link = mysql_select_db("BITM") or die("cannot select database");
        
        $query = "SELECT * FROM `Date`";
        $result = mysql_query($query);
        while ($row = mysql_fetch_assoc($result)){
            $dates[] = $row;
        }
        
        return $dates;
        
    }
    
    public function view($id = null) {
        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $conn = mysql_connect("localhost", "root", "root") or die("Not connected");
        $link = mysql_select_db("BITM") or die("Not connected table");

        $query = "SELECT * FROM `BITM`.`Date` WHERE `Date`.`id` = " . $id;

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

        $query = "SELECT * FROM `BITM`.`Date` WHERE `Date`.`id` = " . $id;

        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    public function delete($id = NULL) {
        
        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $conn = mysql_connect("localhost", "root", "root") or die("Not connected");
        $link = mysql_select_db("BITM") or die("Not connected table");

        $query = "DELETE FROM `BITM`.`Date` WHERE `Date`.`id` = " . $id;

        $result = mysql_query($query);
        if ($result) {
            Utility::message("Delete is successful");
        } else {
            Utility::message("Delete is failed.");
        }

        Utility::redirect('index.php');
    }

}
