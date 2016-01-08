<?php

namespace src\BITM\SEIP107348\Input;

class Location {
    public $id=" ";
    public $title=" ";
    public $created=" ";
    public $modified=" ";
    public $created_by=" ";
    public $modified_by=" ";
    public $deleted_at=" ";
    public function __consturct ($model=false) {
        
}
public function index(){
     return "index - I am listing data";
}
public function create(){
     return "create - I am create form";
}
public function store(){
     return "store - I am storing data";
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