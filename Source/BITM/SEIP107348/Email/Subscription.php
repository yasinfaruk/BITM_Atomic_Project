<?php

namespace App\BITM\SEIP107348\Email;

use App\BITM\SEIP107348\Utility\Utility;

class Subscription {

    public $id = " ";
    public $email = " ";
    public $created = " ";
    public $modified = " ";
    public $created_by = " ";
    public $modified_by = " ";
    public $deleted_at = " ";

    public function __construct($mail = false) {
        $this->email = $mail;
    }

    public function store() {
        $connect = mysql_connect("localhost", "root", "root");
        $link = mysql_select_db("BITM");

        $query = "INSERT INTO `email`( `email`) VALUES ('" . $this->email . "')";
        $result = mysql_query($query);

        if ($result) {
            Utility::message("Insert is successful");
        } else {
            Utility::message("Insert is failed.");
        }

        Utility::redirect('index.php');
    }

    public function index() {
        $connect = mysql_connect("localhost", "root", "root");
        $link = mysql_select_db("BITM");

        $query = "SELECT * FROM `email`";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $email[] = $row;
        }

        return $email;
    }

    public function view($id = NULL) {
        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $conn = mysql_connect("localhost", "root", "root") or die("Not connected");
        $link = mysql_select_db("BITM") or die("Not connected table");

        $query = "SELECT * FROM `BITM`.`email` WHERE `email`.`id` = " . $id;

        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    public function update($id = NULL) {
        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $conn = mysql_connect("localhost", "root", "root") or die("Not connected");
        $link = mysql_select_db("BITM") or die("Not connected table");

        $query = "SELECT * FROM `BITM`.`email` WHERE `email`.`id` = " . $id;

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
        
        $query = "DELETE FROM `BITM`.`email` WHERE `email`.`id` = " . $id;
        
        $result = mysql_query($query);
        if ($result) {
            Utility::message("Delete is successful");
        } else {
            Utility::message("Delete is failed.");
        }

        Utility::redirect('index.php');
    }

}
