<?php

namespace App\BITM\SEIP107348\Textarea;

use App\BITM\SEIP107348\Utility\Utility;

class Summary {

    public $id = " ";
    public $text = "";
    public $created = " ";
    public $modified = " ";
    public $created_by = " ";
    public $modified_by = " ";
    public $deleted_at = " ";

    public function __construct($text = false) {
        return $this->text = $text;
    }

    public function create() {
        $connect = mysql_connect("localhost", "root", "root");
        $link = mysql_select_db("BITM");

        $query = "INSERT INTO `textarea`( `summary`) VALUES ('" . $this->text . "')";
        $result = mysql_query($query);

        if ($result) {
            Utility::message("Insert is successful");
        } else {
            Utility::message("Insert is failed.");
        }

        Utility::redirect('index.php');
    }

    public function index() {
        $city = array();
        $connect = mysql_connect("localhost", "root", "root");
        $link = mysql_select_db("BITM");

        $query = "SELECT * FROM `textarea`";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $text[] = $row;
        }

        return $text;
    }

    public function view($id = NULL) {

        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $connect = mysql_connect("localhost", "root", "root");
        $link = mysql_select_db("BITM");

        $query = "SELECT * FROM `textarea` WHERE `id` = " . $id;
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);

        return $row;
    }

    public function update($id = NULL) {

        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $connect = mysql_connect("localhost", "root", "root");
        $link = mysql_select_db("BITM");

        $query = "SELECT * FROM `textarea` WHERE `id` = " . $id;
        $result = mysql_query($query);
        $row = mysql_fetch_assoc($result);

        return $row;
    }

    public function delete($id = NULL) {
        
        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $connect = mysql_connect("localhost", "root", "root");
        $link = mysql_select_db("BITM");

        $query = "DELETE FROM `textarea` WHERE `id` = " . $id;
        $result = mysql_query($query);

         if ($result) {
            Utility::message("Delete is successful");
        } else {
            Utility::message("Delete is failed.");
        }

        Utility::redirect('index.php');
    }

}
