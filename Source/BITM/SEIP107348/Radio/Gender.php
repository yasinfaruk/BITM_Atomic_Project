<?php

namespace App\BITM\SEIP107348\Radio;
use App\BITM\SEIP107348\Utility\Utility;

class Gender {

    public $id = " ";
    public $gender = " ";
    public $created = " ";
    public $modified = " ";
    public $created_by = " ";
    public $modified_by = " ";
    public $deleted_at = " ";

    public function __construct($data = false) {
        $this->gender = $data;
    }

    public function store() {
        
        $connect = mysql_connect("localhost", "root", "root");
        $link = mysql_select_db("BITM");

        $query = "INSERT INTO `radio`( `gender`) VALUES ('" . $this->gender . "')";
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

        $query = "SELECT * FROM `radio`";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $email[] = $row;
        }

        return $email;
    }

    public function create() {
        return "create - I am create form";
    }

    public function edit() {
        return "edit - I am editing form";
    }

    public function update() {
        return "update - I am updating data";
    }

    public function delete() {
        return "delete - I delete data";
    }

}
