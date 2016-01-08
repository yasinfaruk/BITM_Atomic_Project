<?php

namespace App\BITM\SEIP107348\File;

use App\BITM\SEIP107348\Utility\Utility;

class Picture {

    public $id = " ";
    public $image = " ";
    public $created = " ";
    public $modified = " ";
    public $created_by = " ";
    public $modified_by = " ";
    public $deleted_at = " ";

    public function __construct($image = false) {
        
    }

    public function create($image = NULL) {

//        $_FILES['image']['name'] = $image;

        $file_name = $image['image']['name'];
        $file_size = $image['image']['size'];
        $file_tmp_name = $image['image']['tmp_name'];
//        print_r($file_tmp_name);m

        $conn = mysql_connect("localhost", "root", "root") or die("not connected");
        $lnk = mysql_select_db("BITM") or die("cannot select db table");

        if (move_uploaded_file($file_tmp_name, "images/" . $file_name)) {
            echo 'file moved';

            $query = "INSERT INTO `file`(`image`) VALUES ('" . $file_name . "')";
            $result = mysql_query($query);

            if ($result) {
                Utility::message("Insert is successful");
            } else {
                Utility::message("Insert is failed.");
            }

            Utility::redirect('index.php');
        }
    }

    public function index() {
        $conn = mysql_connect("localhost", "root", "root") or die("not connected");
        $lnk = mysql_select_db("BITM") or die("cannot select db table");

        $query = "SELECT * FROM `file`";
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $images[] = $row;
        }
        return $images;
    }

    public function edit($id = null) {

        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $conn = mysql_connect("localhost", "root", "root") or die("not connected");
        $lnk = mysql_select_db("BITM") or die("cannot select db table");

        $query = "SELECT * FROM `file` WHERE `id` = " . $id;
        $result = mysql_query($query);
        
        $row = mysql_fetch_assoc($result);
        return $row;
    }

    public function update($id = NULL) {
        
        if(is_null($id)){
            Utility::message("No id available !!");
            return Utility::redirect();
        }
        $conn = mysql_connect("localhost", "root", "root") or die("not connected");
        $lnk = mysql_select_db("BITM") or die("cannot select db table");

        $query = "SELECT * FROM `file` WHERE `id` = " . $id;
        $result = mysql_query($query);

        while ($row = mysql_fetch_assoc($result)) {
            $images[] = $row;
        }
        return $images;
    }

    public function delete($id = NULL) {

        if (is_null($id)) {
            Utility::message('No id available !!');
            return Utility::redirect('index.php');
        }

        $conn = mysql_connect("localhost", "root", "root") or die("not connected");
        $lnk = mysql_select_db("BITM") or die("cannot select db table");

        $query = "DELETE FROM `file` WHERE `id` = " . $id;

        $result = mysql_query($query);
        if ($result) {
            Utility::message("Delete is successful");
        } else {
            Utility::message("Delete is failed.");
        }

        Utility::redirect('index.php');
    }

}
