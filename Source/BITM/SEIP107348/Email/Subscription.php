<?php

namespace App\BITM\SEIP107348\Email;
class Subscription {
    public $id=" ";
    public $email=" ";
    public $created=" ";
    public $modified=" ";
    public $created_by=" ";
    public $modified_by=" ";
    public $deleted_at=" ";
    public function __construct ($mail=false) {
        $this->email = $mail;
}
public function index(){
     return "My email address is : " . $this->email;
}
public function create(){
     return "create - I am create form";
}
public function store(){
    $connect = mysql_connect("localhost", "root", "root");
    $link = mysql_select_db("BITM");
    
    $query = "INSERT INTO `email`( `email`) VALUES ('".$this->email."')";
    
    $result = mysql_query($query);
     Utility::redirect("index.php");
}
public function edit(){
     return "edit - I am editing form";
}
public function update(){
     return "update - I am updating data";
}
public function delete(){
     return "delete - I delete data";
}
}