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

    public function create() {
        return "create - I am create form";
    }

    public function store() {
        $connect = mysql_connect("localhost", "root", "root") or die("cannot connect");
        $link = mysql_select_db("BITM") or die("didnt select db");
        
        $query = "INSERT INTO `Date`(`birthday`) VALUES ('".$this->date."')";
        $result = mysql_query($query);
        
        Utility::redirect("index.php");
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
