<?php

namespace App\BITM\SEIP107348\Checkbox;

use App\BITM\SEIP107348\Utility\Utility;

class Hobby {

    public $id = " ";
    public $hobby = " ";
    public $created = " ";
    public $modified = " ";
    public $created_by = " ";
    public $modified_by = " ";
    public $deleted_at = " ";

    public function __construct($data = false) {
        
    }

    public function store($data = NULL) {

        $checkbox = $data['hobby'];
        $hobbies = implode(" , ", $checkbox);

        $conn = mysql_connect("localhost", "root", "root") or die("not connected");
        $lnk = mysql_select_db("BITM") or die("cannot select db table");

        $query = "INSERT INTO `BITM`.`checkbox` (`hobby`) VALUES ('" . $hobbies . "')";
//        print_r($query);
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

        $query = "SELECT * FROM `checkbox`";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $hobbies[] = $row;
        }

        return $hobbies;
    }
   
    public function view($id = null) {
        
        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }
        
        $conn = mysql_connect("localhost", "root", "root") or die("Not connected");
        $link = mysql_select_db("BITM") or die("Not connected table");

        $query = "SELECT * FROM `checkbox` WHERE `checkbox`.`id` = " . $id;
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

        $query = "SELECT * FROM `BITM`.`checkbox` WHERE `checkbox`.`id` = " . $id;

        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    public function delete($id = NULL) {
        
         if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $conn = mysql_connect("localhost", "root", "root") or die("not connected");
        $lnk = mysql_select_db("BITM") or die("cannot select db table");

        $query = "DELETE FROM `checkbox` WHERE `id` = " . $id;

        $result = mysql_query($query);
        if ($result) {
            Utility::message("Delete is successful");
        } else {
            Utility::message("Delete is failed.");
        }

        Utility::redirect('index.php');
    }

}
