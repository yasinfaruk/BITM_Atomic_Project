<?php

namespace App\BITM\SEIP107348\Select;

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

    public function index() {
        return "The city Name is : " . $this->city;
    }

    public function create() {
        return "create - I am create form";
    }

    public function store() {
        return "store - I am storing data";
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
