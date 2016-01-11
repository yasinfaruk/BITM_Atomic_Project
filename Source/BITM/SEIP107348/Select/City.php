<?php

namespace App\BITM\SEIP107348\Select;
use App\BITM\SEIP107348\Utility\Utility;

class City {

//    public $id = " ";
    public $city = " ";
//    public $created = " ";
//    public $modified = " ";
//    public $created_by = " ";
//    public $modified_by = " ";
//    public $deleted_at = " ";

    public function __construct($name = false) {
        $this->city = $name;
    }
    
    public function create() {
        
        $connect = mysql_connect("localhost", "root", "root");
        $link = mysql_select_db("BITM");

        $query = "INSERT INTO `select_city`( `city`) VALUES ('" . $this->city . "')";
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

        $query = "SELECT * FROM `select_city`";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $city[] = $row;
        }

        return $city;
        
    }

    public function view($id = NULL) {
        
       if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $connect = mysql_connect("localhost", "root", "root");
        $link = mysql_select_db("BITM");

        $query = "SELECT * FROM `select_city` WHERE `id` = " . $id;
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

        $query = "SELECT * FROM `select_city` WHERE `id` = " . $id;
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

        $query = "DELETE FROM `select_city` WHERE `id` = " . $id;
        $result = mysql_query($query);

        if ($result) {
            Utility::message("Delete is successful");
        } else {
            Utility::message("Delete is failed.");
        }

        Utility::redirect('index.php');
    }

}
